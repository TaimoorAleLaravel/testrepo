<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $value;
    public $label;
    public $id;
    public $check;

    public function __construct($name, $value, $label, $id, $check = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
        $this->id = $id;
        $this->check = $check;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkbox');
    }
}
