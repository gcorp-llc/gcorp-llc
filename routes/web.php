<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

include 'pages.php';
include 'guest.php';
include 'auth.php';
include 'admin.php';

Route::get("google", function () {

    $title=\App\Models\Post::first();
    $query=$title->title;
    $url="https://www.google.com/search?q=".$query."&tbm=isch&tbs=isz:l";
 // ایجاد یک نمونه از کلاس GuzzleHttp\Client
        $client = new Client();

        // دریافت محتوای صفحه ورودی
        $response = $client->request('GET', $url);
        $html = $response->getBody()->getContents();

        // ایجاد یک نمونه از کلاس Symfony\Component\DomCrawler\Crawler
        $crawler = new Crawler($html);

        // انتخاب تصاویر با استفاده از CSS selector
        $images = $crawler->filter('.DS1iW')->images();

        foreach ($images as $image) {
            // دریافت URL تصویر
            $imageUrl = $image->getUri();
echo $imageUrl."<br>";
//            $content = file_get_contents($image);
//            $avatar='/users/' . Str::replace(' ','_',$name) . ".jpg";
//            // ذخیره تصویر در استورج
//            Storage::disk('public')->put($avatar, $content);
            // دریافت نام تصویر
            $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);

        }

        return 'Images crawled and saved successfully.';

});



