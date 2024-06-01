<?php

namespace App\Console\Commands;

use App\Jobs\NobatCrawlerJob;
use App\Jobs\ProcessLinksJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CrawlerNobatir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:nobatir';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start For Crawler Nobat.ir To Site';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        NobatCrawlerJob::dispatch();
//        try {
//            $cities = Http::get('https://nobat.ir/api/public/cities')->json();
//
//            foreach ($cities as $item) {
//                ProcessLinksJob::dispatch($item['url']);
//            }
//            return "Run Hacking Now!";
//        } catch (\Exception $e) {
//            return $e->getMessage();
//        }
    }
}
