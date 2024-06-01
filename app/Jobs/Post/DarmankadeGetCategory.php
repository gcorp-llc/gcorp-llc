<?php

namespace App\Jobs\Post;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;

class DarmankadeGetCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Initialize Guzzle client
        $client = new Client();
        // Send a GET request to the website
        $response = $client->get('https://www.darmankade.com/blog/');
        // Get the HTML content of the response
        $html = $response->getBody()->getContents();
        // Initialize Symfony DomCrawler
        $crawler = new Crawler($html);

        // Extract all links from the HTML
        $links = $crawler->filter('#navbarSupportedContent ul li  ul li a')->links();

        // Iterate through the extracted links
        foreach ($links as $link) {
            $url = $link->getUri();
            if(Str::contains($url, 'blog')) {
                \App\Jobs\Post\DoctorToGetLinks::dispatch($url,"darmankade");
            }
        }

    }
}
