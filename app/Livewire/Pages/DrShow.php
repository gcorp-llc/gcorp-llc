<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use Livewire\Component;

class DrShow extends Component
{
    public $slug,$doctor;

    public function mount()
    {
        $this->doctor=User::firstWhere('name',str_replace('_',' ',$this->slug));
        SEOTools::setTitle( $this->doctor->name);
        SEOTools::setDescription(Str::limit($this->doctor->data->description, $limit = 190));
        SEOMeta::addKeyword([
            'گروه فن آوری جهان نوین راد',
            'بهینه سازی و مدیریت سئو', 'پیج اینستاگرام',
            'طراحی سایت','تبلیغات',
            'مدیریت سئو','بازاریابی',
            'مدیریت پیج اینستاگرام','gcorp llc',
            $this->doctor->name,
            $this->doctor->data->experience,
            $this->doctor->data->instagram
        ]);
    }
    public function render()
    {
        return view('livewire.pages.dr-show');
    }
}
