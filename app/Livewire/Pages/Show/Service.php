<?php

namespace App\Livewire\Pages\Show;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Service extends Component
{
    public $data;

    public function mount($slug)
    {
        $this->data = \App\Models\Service::firstWhere('slug',$slug);
        SEOTools::setTitle($this->data->title);
        \Artesaos\SEOTools\Facades\SEOMeta::addKeyword($this->data->seo_keywords);
        SEOTools::setDescription($this->data->seo_description);
        SEOTools::opengraph()->setUrl('https://gcorp.cc/service/'.$this->data->slug);

        SEOTools::jsonLd()->addImage(Storage::url($this->data->cover));
        SEOTools::opengraph()->addProperty('type', 'articles');
    }
    public function render()
    {
        return view('livewire.pages.show.service');
    }
}
