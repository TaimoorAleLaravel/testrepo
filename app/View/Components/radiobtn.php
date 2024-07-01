<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class radiobtn extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $label;
    public $val1;
    public $val2;
    public $id1;
    public $id2;
    public $radio1;
    public $radio2;
    public $value;
    public function __construct($name , $label, $val1 , $val2, $id1 , $id2 , $radio1 , $radio2, $value = "" )
    {
    $this->name = $name;
    $this->label = $label;
    $this->val1 = $val1;
    $this->val2 = $val2;
    $this->id1 = $id1;
    $this->id2 = $id2;
    $this->radio1 = $radio1;
    $this->radio2 = $radio2;
    $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.radiobtn');
    }
}
