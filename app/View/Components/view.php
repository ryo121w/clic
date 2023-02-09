<?php

namespace App\View\Components;

use Illuminate\View\Component;

class view extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $store_formats;
     public $user;

    public function __construct($storeFormats, $user)
    {
        $this->store_formats = $storeFormats;
        $this->user = $user;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.view');
    }
}
