<?php

namespace App\Livewire\Pages;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        SEOTools::setTitle('گروه فن آوری جهان نوین راد');
        SEOMeta::addKeyword([
            'گروه فن آوری جهان نوین راد',
            'بهینه سازی و مدیریت سئو', 'پیج اینستاگرام',
            'طراحی سایت','تبلیغات',
            'مدیریت سئو','بازاریابی',
            'مدیریت پیج اینستاگرام','gcorp llc'
        ]);
        SEOTools::setDescription('گروه فن آوری جهان نوین راد اجرا ، مشاوره و پشتیبانی در امور طراحی سایت و نرم افزار ـ تولید و مشاوره و ارزیابی در طرح های کسب و کار خلاقانه در حوزه سلامت زیست فناوری');
        SEOTools::opengraph()->setUrl('https://gcorp.cc/services');
        SEOTools::opengraph()->addProperty('type', 'articles');
        return view('livewire.pages.services')->with([
            'data' =>\App\Models\Service::get()
        ]);
    }
}
