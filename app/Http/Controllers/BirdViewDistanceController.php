<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostalCode;
use App\Traits\calculateDistanceTrait;
use Illuminate\Validation\Rule;

class BirdViewDistanceController extends Controller
{
    use calculateDistanceTrait;
    
    private $pincode;
    private $rules = [];

    public function __construct()
    {
        $this->pincode = PostalCode::pluck('pincode');
        
        $this->rules = [
            'pickup_pincode' => ['required', 'integer', 'digits:6', Rule::in($this->pincode)],
            'destination_pincode' => ['required', 'integer', 'digits:6', Rule::in($this->pincode)],
        ];
    }

    public function create()
    {
        return view('distance.birdview-distance');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $pickupData = PostalCode::where('pincode', $validatedData['pickup_pincode'])
            ->first()->only('latitude', 'longitude');
        
        $destinationData = PostalCode::where('pincode', $validatedData['destination_pincode'])
            ->first()->only('latitude', 'longitude');

        $distanceInKm =  $this->calculateBirdViewDistance(
            $pickupData['latitude'],
            $pickupData['longitude'],
            $destinationData['latitude'],
            $destinationData['longitude'],
        );

        return redirect()->route('birdview-distance.create')->with('distanceInKm', $distanceInKm);

    }

}
