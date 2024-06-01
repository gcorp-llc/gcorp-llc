<?php

namespace App\Jobs\Post;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class DoctoreToPostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $link, $type;

    public function __construct($link, $type)
    {
        $this->link = $link;
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
        // دریافت محتوای صفحه وب
        $html = file_get_contents($this->link);

        // ایجاد یک نمونه از کلاس Crawler با استفاده از محتوای HTML
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);
        //Name
        $title = $crawler->filter('.ili-post-title')->text();

        if ($title) {
            $description = $crawler->filter('.entry-content')->html();
            $description = preg_replace('/<section\b[^>]*\b class="ads-banner"[^>]*>.*?<\/section>/', '', $description);
            $description = preg_replace('/<div\b[^>]*\b class="textwidget custom-html-widget"[^>]*>.*?<\/div>/', '', $description);
            $description = preg_replace('/<button\b[^>]*>(.*?)<\/button>/', '', $description);
            $description = preg_replace('/<a\b[^>]*>(.*?)<\/a>/', '<p>$1</p>', $description);
            $description = preg_replace('/<i\b[^>]*>(.*?)<\/i>/', '', $description);
            $description = preg_replace('/<audio\b[^>]*>(.*?)<\/audio>/', '<p>$1</p>', $description);
            $description = preg_replace('/<img\b[^>]*>/', '', $description);

            // $description = str_replace('https://www.darmankade.com/', '<a href="https://gcorp.cc/">GCORP LLC</a>', $description);
            $description = str_replace('درمانکده', '<a href="https://gcorp.cc/">GCORP LLC</a>', $description);
            //                $description = str_replace('پذیرش۲۴', '<a href="https://gcorp.cc/">GCORP LLC</a>', $description);
            $post = Post::updateOrCreate([
                'title' => $title,
            ],
                [
                    'info' => Str::limit(strip_tags($description), 190, ' ...'),
                    'tags' => str_replace(' ', ',', $title) . ",GCORPLLC ,حسین افتخارراد , گروه فن آوری جهان نوین راد",
                    'description' => $description,
                    'published' => 1,
                    'seo_description' => Str::limit(strip_tags($description), 190, ' ...'),
                    'seo_keywords' => str_replace(' ', ',', $title) . ",GCORPLLC ,حسین افتخارراد , گروه فن آوری جهان نوین راد"
                ]);

        }

    }


    public function doctoreTo()
    {
        // دریافت محتوای صفحه وب
        $html = file_get_contents($this->link);

        // ایجاد یک نمونه از کلاس Crawler با استفاده از محتوای HTML
        $crawler = new \Symfony\Component\DomCrawler\Crawler($html);
        //Name
        $title = $crawler->filter('.heading')->text();
        if ($title) {
            $seo_description = $crawler->filter('.excerpt p')->first()->text();
            $description = $crawler->filter('.start-content')->html();
            $description = preg_replace('/<section\b[^>]*\bclass="ads-banner"[^>]*>.*?<\/section>/', '', $description);
            $description = preg_replace('/<button\b[^>]*>(.*?)<\/button>/', '', $description);
            $description = preg_replace('/<a\b[^>]*>(.*?)<\/a>/', '<p>$1</p>', $description);
            $description = preg_replace('/<audio\b[^>]*>(.*?)<\/audio>/', '<p>$1</p>', $description);
            $description = preg_replace('/<img\b[^>]*>/', '', $description);
            $description = str_replace('دکترتو', '<a href="https://gcorp.cc/">GCORP LLC</a>', $description);
            $description = str_replace('مراقب سلامتی شماست!', 'آینده متعلق به ماست', $description);
            $post = Post::updateOrCreate([
                'title' => $title,
            ],
                [
                    'info' => Str::limit(strip_tags($seo_description), 190, ' ...'),
                    'tags' => str_replace(' ', ',', $title) . ",GCORPLLC ,حسین افتخارراد , گروه فن آوری جهان نوین راد",
                    'description' => $description,
                    'published' => 1,
                    'seo_description' => Str::limit(strip_tags($seo_description), 190, ' ...'),
                    'seo_keywords' => str_replace(' ', ',', $title) . ",GCORPLLC ,حسین افتخارراد , گروه فن آوری جهان نوین راد"
                ]);

        }
    }
}
