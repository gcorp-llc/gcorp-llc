<?php

namespace App\Livewire\Pages\Show;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\SEOMeta;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Article extends Component
{
    public $data;

    public function mount($slug)
    {
        $this->data = Post::firstWhere('slug',$slug);

        SEOTools::setTitle($this->data->title);
        \Artesaos\SEOTools\Facades\SEOMeta::addKeyword($this->data->seo_keywords);
        SEOTools::setDescription($this->data->seo_description);
        SEOTools::opengraph()->setUrl('https://gcorp.cc/article/'.$this->data->slug);

        SEOTools::jsonLd()->addImage(Storage::url($this->data->cover));
        SEOTools::opengraph()->addProperty('type', 'articles');
    }
    public function render()
    {
        return view('livewire.pages.show.article');
    }
}
