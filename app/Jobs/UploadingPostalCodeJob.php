<?php

namespace App\Jobs;

use App\Models\PostalCode;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class UploadingPostalCodeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->data as $row) {
            PostalCode::updateOrCreate([
                'id' => $row[0],
            ], [
                'circle' => $row[1],
                'region' => $row[2],
                'division' => $row[3],
                'office' => $row[4],
                'pincode' => $row[5],
                'district' => $row[6],
                'state' => $row[7],
                'latitude' => $row[8],
                'longitude' => $row[9],
                'created_at' => $row[10],
                'updated_at' => $row[11],
            ]);
        }
    }
}
