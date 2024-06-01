<?php

namespace App\Livewire\Pages;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class Articles extends Component
{
    use WithPagination;
public $posts,$authors,$categories,$query = '';
    public function mount()
    {
        $this->authors=Author::count();
        $this->categories=Category::count();
    }

    public function search()
    {
        $this->resetPage();
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
        SEOTools::opengraph()->setUrl('https://gcorp.cc/articles');
        SEOTools::opengraph()->addProperty('type', 'articles');
        return view('livewire.pages.articles')->with([
            'data' =>Post::where('title', 'like', '%' . $this->query . '%')->
            inRandomOrder()->latest()->paginate(30),
            'news'=>Post::latest()->limit(3)->get(),
            'polar'=>Post::inRandomOrder()->limit(3)->get()
        ]);
    }
}
