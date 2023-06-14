<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Demo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $msg;
    public function __construct($data)
    {
        $this->msg = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.demo');
    }
}
