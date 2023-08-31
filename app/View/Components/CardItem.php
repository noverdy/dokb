<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class CardItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public int $key = 0,
        public Post $post,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-item');
    }
}
