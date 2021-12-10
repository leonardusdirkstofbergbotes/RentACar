<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Stacked extends Component
{
    public $required, $fieldName, $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($required, $fieldName, $icon)
    {
        $this->required = $required;
        $this->fieldName = $fieldName;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.stacked');
    }
}
