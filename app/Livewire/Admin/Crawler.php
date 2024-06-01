<?php

namespace App\Livewire\Admin;

use App\Jobs\Post\DarmankadeGetCategory;
use App\Jobs\Post\DoctorToGetLinks;
use App\Jobs\ProcessLinksJob;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Crawler extends Component
{

    public function mount()
    {
        $price=Http::get('https://console.melipayamak.com/api/receive/credit/4f7a2523ce9e4de38d880dd503f418a8');
//        dd($price->json());
    }
    public function runCrawler()
    {
        try {
            $cities = Http::get('https://nobat.ir/api/public/cities')->json();
            foreach ($cities as $item) {
                ProcessLinksJob::dispatch($item['url']);
            }
            return "Run Hacking Now!";
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function doctorCrawler()
    {
        DarmankadeGetCategory::dispatchSync();
        DoctorToGetLinks::dispatchSync("null", "doctoreTo");
        return redirect()->to('admin/');
    }

    public function render()
    {
        return view('livewire.admin.crawler');
    }
}
