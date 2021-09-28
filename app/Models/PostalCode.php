<?php

namespace App\Models;

use App\Jobs\UploadingPostalCodeJob;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'circle', 'region', 'division', 'office', 'pincode', 'state', 'district', 'latitude', 'longitude',
    ];

    public function importToDatabase()
    {
        $path = resource_path('pending-files/*.csv');

        $files = glob($path);

        foreach ($files as $file) {

            $data = array_map('str_getcsv', file($file));

            UploadingPostalCodeJob::dispatch($data);

            unlink($file);
        }
    }
}
