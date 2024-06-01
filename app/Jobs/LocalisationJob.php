<?php

namespace App\Jobs;

use App\Models\Country;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use mysql_xdevapi\Exception;

class LocalisationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $country = \App\Models\Country::first();
        if (empty($country)){
            $country =   Country::create([
                'name'=>'ایران',
                'slug'=>'iran',
                'latitude' => '32.427908',
                'longitude' => '53.688046',
            ]);
        }

            $citys = Http::get('https://api.doctoreto.com/api/web/patient/v1/regions/cities/available')->json('items');
            $citys = collect($citys);
            if ($citys->isNotEmpty()) {
                $citys->map(function ($item) use ($country) {

                    /**Create Province**/
                    $province = \App\Models\Province::firstOrCreate([
                        'country_id' => $country->id,
                        'name' => $item['province']['name'],
                        'slug' => $item['province']['slug'],
                        'latitude' => $item['province']['latitude'],
                        'longitude' => $item['province']['longitude'],
                    ]);

                    $city = \App\Models\City::firstOrCreate([
                        'province_id' => $province->id,
                        'name' => $item['name'],
                        'slug' => $item['slug'],
                        'latitude' => $item['latitude'],
                        'longitude' => $item['longitude'],
                        "priority" => $item["priority"],
                        "is_center" => $item["is_center"]
                    ]);
                });

            }

    }
}
