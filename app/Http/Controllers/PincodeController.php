<?php

namespace App\Http\Controllers;

use App\Http\Requests\PincodeRequest;
use Illuminate\Http\Request;
use App\Models\PostalCode;

class PincodeController extends Controller
{
    public function index(Request $request)
    {        
        $search = '%'.strtolower($request->input('search')).'%';

        $postalCodes = PostalCode::query()
                ->when($search, function ($query, $search) {
                    return $query
                        ->where('pincode', 'LIKE', $search)
                        ->orWhere('district', 'LIKE', $search)
                        ->orWhere('state', 'LIKE', $search);
                })
                ->paginate(20);


        return view('pincode.index', [
            'postalCodes' => $postalCodes,
        ]);
        
    }

    public function create()
    {
        return view('pincode.create', [
            'pincode' => new PostalCode,
        ]);
    }

    public function store(PincodeRequest $request)
    {
        $validatedData = $request->validated();

        PostalCode::create($validatedData);

        return redirect()->route('pincodes.index')->with('success', 'New Pincode Added Successfully');
    }

    public function edit(PostalCode $pincode)
    {
        return view('pincode.edit', [
            'pincode' => $pincode,
        ]);
    }

    public function update(PostalCode $pincode, Request $request)
    {
        $validatedData = $request->validated();

        PostalCode::where('id', $pincode->id)->update($validatedData);

        return redirect()->route('pincodes.index')->with('success', 'Pincode Data Updated Successfully');

    }

    public function destroy(PostalCode $pincode)
    {
        $pincode->delete();

        return redirect()->route('pincodes.index')->with('success', 'Pincode Deleted Successfully');
    }

    public function destroyAll()
    {
        PostalCode::truncate();

        return redirect()->route('pincodes.index')->with('success', 'Entire Table Data Deleted Successfully');
    }

    public function upload()
    {
        return view('pincode.upload');
    }

    public function uploadStore(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv',
        ]);

        $file = file($request->file->getRealPath());
        $data = array_slice($file, 1);

        $parts = (array_chunk($data, 100));

        foreach ($parts as $index=>$part) {
            $fileName = resource_path('pending-files/'.date('y-m-d-H-i-s').$index.'.csv');

            file_put_contents($fileName, $part);
        }

        session()->flash('status', 'Queued for Importing.');

        (new PostalCode())->importToDatabase();

        return back();
    }
}
