<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Service;
use App\Models\User;
use Illuminate\Console\Command;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class SiteMapCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

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
        $sitemap=Sitemap::create();
        $urls = [
            'https://gcorp.cc',
            'https://gcorp.cc/products',
            'https://gcorp.cc/services',
            'https://gcorp.cc/articles',
            'https://gcorp.cc/faq',
            'https://gcorp.cc/about-us',
        ];
        foreach ($urls as $url) {
            $map = Url::create($url)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1);
            $sitemap->add($map);

        }
        $users=User::where('role_id',2)->get();
        foreach ($users as $user) {
            $url='https://gcorp.cc/dr/'.str_replace(' ','_',$user->name);
            $map = Url::create($url)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1);
            $sitemap->add($map);
        }

        $articles=Post::latest()->get();

        foreach ($articles as $article) {
            $url='https://gcorp.cc/article/'.str_replace(' ','_',$article->title);
            $map = Url::create($url)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1);
            $sitemap->add($map);
        }

        $services=Service::latest()->get();
        foreach ($services as $service) {
            $url='https://gcorp.cc/service/'.str_replace(' ','_',$service->title);
            $map = Url::create($url)
                ->setLastModificationDate(Carbon::now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1);
            $sitemap->add($map);
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
