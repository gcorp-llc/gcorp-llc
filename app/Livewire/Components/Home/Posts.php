<?php

namespace App\Livewire\Components\Home;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{

    public $posts,$authors,$categories;
    public function mount()
    {
        $this->posts=Post::count();
        $this->authors=Author::count();
        $this->categories=Category::count();


    }
    public function render()
    {
        return view('livewire.components.home.posts')->with([
            'data'=>Post::latest()->take(5)->get(),
            'news'=>Post::latest()->limit(3)->get(),
            'polar'=>Post::inRandomOrder()->limit(3)->get()
        ]);
    }
}
