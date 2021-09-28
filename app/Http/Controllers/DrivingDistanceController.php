<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\calculateDistanceTrait;

class DrivingDistanceController extends Controller
{
    use calculateDistanceTrait;

    private $pincode;
    private $rules = [];

    public function __construct()
    {        
        $this->rules = [
            'pickup_pincode' => ['required', 'integer', 'digits:6'],
            'destination_pincode' => ['required', 'integer', 'digits:6'],
        ];
    }

    public function create()
    {
        return view('distance.driving-distance');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $pickupCoordinates = $this->getLongitudeAndLatitude($validatedData['pickup_pincode']);
        $destinationCoordinates = $this->getLongitudeAndLatitude($validatedData['destination_pincode']);

        if (empty($pickupCoordinates) || empty($destinationCoordinates)) {
            return back()
                ->with('error', 'We do not have rates for entered location.');
        } else {
            $distanceInKm = $this->calculateDrivingDistance($pickupCoordinates, $destinationCoordinates);
            
            return redirect()
                ->route('driving-distance.create')
                ->with('distanceInKm', $distanceInKm);
        }

    }
}
