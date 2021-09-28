<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PincodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postal_codes')->insert([
            'circle' => 'West Bengal Circle',
            'region' => 'South Bengal Region',
            'division' => 'Howrah Division',
            'office' => 'Belur Bazar',
            'pincode' => '711202',
            'state' => 'West Bengal',
            'district' => 'Howrah',
            'latitude' => '22.627806',
            'longitude' => '88.350861',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('postal_codes')->insert([
            'circle' => 'Maharashtra Circle',
            'region' => 'Mumbai Region',
            'division' => 'Mumbai City East Division',
            'office' => 'Tank Road',
            'pincode' => '400033',
            'state' => 'Maharastra',
            'district' => 'Mumbai',
            'latitude' => '18.966333',
            'longitude' => '72.822111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
