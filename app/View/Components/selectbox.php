<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class selectbox extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $id;
    public $name;
    public $options;
    public $disabledOpt;
    public $value;
    public function __construct($label, $id , $name, $disabledOpt , $options , $value = "" )
    {
        $this->label = $label;
        $this->id = $id;
        $this->name= $name;
        $this->options = $options;
        $this->disabledOpt = $disabledOpt;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.selectbox');
    }
}
