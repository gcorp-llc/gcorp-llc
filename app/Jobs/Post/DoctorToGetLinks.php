<?php

namespace App\Jobs\Post;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\DomCrawler\Crawler;

class DoctorToGetLinks implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $url, $type;

    public function __construct($url, $type)
    {
        $this->url = $url;
        $this->type = $type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->type == "doctoreTo") $this->doctoreTo();
        if ($this->type == "darmankade") $this->darmankade();
    }

    public function darmankade()
    {
        // Initialize Guzzle client
        $client = new Client();
        // Send a GET request to the website
        $response = $client->get($this->url);
        // Get the HTML content of the response
        $html = $response->getBody()->getContents();
        // Initialize Symfony DomCrawler
        $crawler = new Crawler($html);
        // Extract all links from the HTML
        $links = $crawler->filter('.ili-grid-wrapper div div article .shimmerBG')->links();

        foreach ($links as $link) {
            $url = $link->getUri();
            \App\Jobs\Post\DoctoreToPostJob::dispatch($url, "darmankade");
        }


    }

    public function doctoreTo()
    {
        $websiteUrl = 'https://doctoreto.com/blog/all-posts/';
            // Initialize Guzzle client
            $client = new Client();
            // Send a GET request to the website
            $response = $client->get($websiteUrl);
            // Get the HTML content of the response
            $html = $response->getBody()->getContents();
            // Initialize Symfony DomCrawler
            $crawler = new Crawler($html);
            // Extract all links from the HTML
            $links = $crawler->filter('.category-loop-parent a')->links();
            // Use an array to store unique links
            $uniqueLinks = [];
            // Iterate through the extracted links
            foreach ($links as $link) {
                $url = $link->getUri();
                \App\Jobs\Post\DoctoreToPostJob::dispatch($url, "doctoreTo");
            }

        }

}
