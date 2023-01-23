<?php

namespace App\View\Components;

use Illuminate\View\Component;

class app extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $user;
     public $sex;
     public $store_format;

    public function __construct($user, $store_format, $sex)
    {
        $this->user = $user;
        $this->sexes = $sex;
        $this->store_format = $store_format;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app');
    }
}
