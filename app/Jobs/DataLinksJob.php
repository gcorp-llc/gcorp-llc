<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class DataLinksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {


            // دریافت محتوای صفحه وب
            $html = file_get_contents($this->link);
            // ایجاد یک نمونه از کلاس Crawler با استفاده از محتوای HTML
            $crawler = new Crawler($html);
            //Name
            $name = $crawler->filter('.doctor-ui-name')->text();

            if ($name && $name!="دکتر فرنوش سادات قاسمی هاشمی") {
                //Doctor Code
                $code = $crawler->filter('.doctor-code')->text();
                //State
                $state = $crawler->filter('.office-address > strong')->first()->text();
                //address
                $address = $crawler->filter('.office-address > strong')->last()->text();
                //experience
                $experience = $crawler->filter('.doctor-ui-specialty')->text();
                //Description
                $description = $crawler->filter('.doctor-bio-content')->text();
                //instagram
                $instagram = $crawler->filter('.social-media > div > a')->link()->getUri();

                //image Avatar
                $image = $crawler->selectImage($name)->image()->getUri();
                // دریافت محتوای تصویر
                $content = file_get_contents($image);
                $avatar='/users/' . Str::replace(' ','_',$name) . ".jpg";
                // ذخیره تصویر در استورج
               Storage::disk('public')->put($avatar, $content);
                $response = Http::get($this->link);
                $data = $response->body();
                // Find the data-officeId= attribute
                $data_office_id = Str::between($data, 'data-officeId="', '"');

                // Return the links and the data-officeId= attribute

                $office_id = Str::limit($data_office_id, 6, '');
                $getPhone = Http::post('https://nobat.ir/api/public/doctor/office/tells', [
                    "office_id" => $office_id
                ]);

                $numbers = $getPhone->json();

                // الگوی شماره‌های تلفن همراه ایران
                $pattern = '/^(09)[0-9]{9}$/';

                // برای هر شماره در لیست
                foreach ($numbers as $number) {
                    // اگر شماره با الگوی شماره تلفن همراه ایران مطابقت داشت
                    if (preg_match($pattern, $number['call'])) {
                        // شماره را به آرایه جدید اضافه کنیم
                        $drNumbers[] = $number['call'];
                    }
                }

                $websites = [];
                preg_match_all('/(https?:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,6})/i', $description, $matches);
                foreach ($matches[1] as $match) {
                    $websites[] = $match;
                }


                User::updateOrCreate(
                    [
                        "role_id" => 2,
                        'name' => $name,
                        'phone' => $drNumbers[0] ?? null,
                    ],
                    [
                        'avatar' => $avatar,
                        'data' => [
                            "state" => $state,
                            "city" => $state,
                            "address" => $address,
                            'numbers' => $numbers,
                            'websites' => $websites ?? "",
                            "platform" => 'https://nobat.ir',
                            "category" => '',
                            'code' => $code,
                            "experience" => $experience,
                            'instagram' => $instagram,
                            'description' => $description,
                        ]
                    ]);
            }



    }

}
