<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Category;
use App\Models\Tag;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::with("questions")->get();
        $tags = Tag::with("questions")->get();
        return view('components.navbar', [
            "categories" => $categories,
            "tags" => $tags
        ]);
    }
}
