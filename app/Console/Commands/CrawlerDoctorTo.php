<?php

namespace App\Console\Commands;

use App\Jobs\Post\DarmankadeGetCategory;
use App\Jobs\Post\DoctorToGetLinks;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerDoctorTo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:doctorto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start For Crawler Doctor To Site';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DarmankadeGetCategory::dispatchSync();
        DoctorToGetLinks::dispatchSync("null", "doctoreTo");
       $this->info('Run Code');
    }
}
