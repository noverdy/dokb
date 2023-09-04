<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Template extends Component
{
    public $navigation;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $navigation = true, string $class = '')
    {
        $this->navigation = $navigation;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template');
    }
}
