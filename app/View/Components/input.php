<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public $required;
    public $type;
    public $name;
    public $id;
    public $label;
    public $placeholder;
    public $error_msg;
    public $max;
    public $min;
    public $size;
    public $maxlength;
    public $data_type;
    public $pattern;
    public $pre;
    public $post;
    public $value;
    public function __construct($type, $name, $label  , $id = '', $placeholder = '', $required = '0' , $error_msg = '' , $max = null , $min = null, $size = null , $maxlength = null, $data_type = null, $pattern=null , $pre = null , $post = null , $value = "")
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->required = $required;
        $this->label = $label;
        $this->error_msg = $error_msg;
        $this->placeholder = $placeholder;
        $this->max = $max;
        $this->min = $min;
        $this->size  = $size;
        $this->maxlength  = $maxlength;
        $this->data_type = $data_type;
        $this->pattern = $pattern;
        $this->pre = $pre;
        $this->post  = $post;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
