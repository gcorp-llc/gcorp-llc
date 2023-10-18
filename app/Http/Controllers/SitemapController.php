<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Sample;
use App\Models\Service;
use Illuminate\Http\Request;
use Melipayamak\MelipayamakApi;

class SitemapController extends Controller
{
    public function index($value = '')
    {
        $posts = Post::latest()->get();
        $services = Service::latest()->get();
        $samples =Sample::latest()->get();
        $products=Product::latest()->get();
        $pages = [' ', 'services', 'products', 'articles', 'samples', 'faq', 'about-us'];
        return response()->view('sitemap', [
            'pages' => $pages,
            'posts' => $posts,
            'services'=>$services,
            'samples'=>$samples,
            'products'=>$products
        ])->header('Content-Type', 'text/xml');
    }
}
