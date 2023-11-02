<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Validation extends Component
{
    /**
     * Create a new component instance.
     */
    public $validation;
    public function __construct($validation)
    {
        $this->validation=$validation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.validation');
    }
}
