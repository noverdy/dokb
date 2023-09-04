<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class CardItem extends Component
{
    public $key;
    public $post;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $key = 0, Post $post)
    {
        $this->key = $key;
        $this->post = $post;
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
