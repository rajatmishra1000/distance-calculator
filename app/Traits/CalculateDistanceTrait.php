<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait calculateDistanceTrait
{
    public function calculateBirdViewDistance(string $latitude1, string $longitude1, string $latitude2, string $longitude2)
    {
        $radius = 6371;
        $radianLatitude = deg2rad($latitude2 - $latitude1);
        $radianLongitude = deg2rad($longitude2 - $longitude1);

        $a = sin($radianLatitude / 2) * sin($radianLatitude / 2) +
            cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) *
            sin($radianLongitude / 2) * sin($radianLongitude / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $radius * $c;

        return round($distance, 2);
    }

    public function getLongitudeAndLatitude(int $pincode)
    {
        $response = Http::get('https://dev.virtualearth.net/REST/v1/Locations', [
            'countryRegion' => 'IN',
            'postalCode' => $pincode,
            'key' => config('services.bing.key'),
        ]);

        $resources = $response['resourceSets'][0]['resources'];

        for ($i = 0; $i <= count($resources); $i++) {
            if ($resources[$i]['name'] == $pincode || $resources[$i]['name'] == $pincode . ', India') {
                return $resources[$i]['point']['coordinates'];
            } else {
                return [];
            }
        }
    }

    public function calculateDrivingDistance(array $pickupData, array $destinationData)
    {
        $response = Http::get('https://dev.virtualearth.net/REST/v1/Routes/DistanceMatrix', [
            'origins' => $pickupData[0] . ',' . $pickupData[1],
            'destinations' => $destinationData[0] . ',' . $destinationData[1],
            'travelMode' => 'driving',
            'key' => config('services.bing.key'),
        ]);

        foreach ($response['resourceSets'] as $resourceSet) {
            $resourceSet['resources'];
        }

        foreach ($resourceSet['resources'] as $resources) {
            $resources['results'];
        }

        foreach ($resources['results'] as $data) {
            $distanceInKm =  $data['travelDistance'];
        }

        return $distanceInKm;
    }
}
