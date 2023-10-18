<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class Faq extends Component
{

    public $query = '',$data;

    public function mount()
    {
        $this->data=\App\Models\Faq::where('question', 'like', '%'.$this->query.'%')->latest()->get();
    }
    public function search()
    {
        $this->data=\App\Models\Faq::where('question', 'like', '%'.$this->query.'%')->latest()->get();

    }

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
        SEOTools::opengraph()->setUrl('https://gcorp.cc/faq');
        SEOTools::opengraph()->addProperty('type', 'articles');
        return view('livewire.pages.faq')->with([
            'posts'=>Post::latest()->take(4)->get()
        ]);
    }
}
