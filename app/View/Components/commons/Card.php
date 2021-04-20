<?php

namespace App\View\Components\commons;

use Illuminate\View\Component;

class Card extends Component
{

    public $course;

    public function __construct($course = [])
    {
        $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components..commons.card');
    }
}
