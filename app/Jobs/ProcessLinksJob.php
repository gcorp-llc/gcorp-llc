<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ProcessLinksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $url;
    public $baseUrl = 'https://nobat.ir';

    public function __construct($url,)
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

               for ($page = 1; $page <= 3; $page++) {
                   if ($page == 1) $url = $this->baseUrl . $this->url;
                   if ($page != 1) $url = $this->baseUrl . $this->url . "/page-" . $page;
                   ExtractLinksJob::dispatch($url);
               }

       }

}
