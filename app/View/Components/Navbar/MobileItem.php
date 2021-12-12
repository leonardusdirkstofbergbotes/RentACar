<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class MobileItem extends Component
{
    public $url, $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $icon)
    {
        $this->url = $url;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar.mobile-item');
    }
}
