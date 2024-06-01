<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ExtractLinksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    protected $url;
    public $baseUrl = 'https://nobat.ir';
    public function __construct($url)
    {
        $this->url = $url;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

            $response = Http::get($this->url);
            $data = $response->body();
            $links = [];

            // Find all <a> tags
            preg_match_all('/<a[^>]+href="([^"]+)"[^>]+>/i', $data, $matches);

            // Extract the links
            foreach ($matches[1] as $link) {
                if (Str::startsWith($link, '/')) {
                    $new_link = $this->baseUrl . $link;
                } else {
                    $new_link = $link;
                }
                $links[] = $new_link;
            }
            $new_links = [];
            $excludedLinks = [
                'https://nobat.ir',
                'https://nobat.ir/',
                "https://user.nobat.ir",
                "https://user.nobat.ir/",
                "https://nobat.ir/contact-us",
                "https://nobat.ir/contact-us/",
                "https://nobat.ir/terms/",
                "https://nobat.ir/terms",
            ];

            $filteredLinks = array_diff($links, $excludedLinks);
            foreach ($filteredLinks as $link) {
                DataLinksJob::dispatch($link);
            }


    }
}
