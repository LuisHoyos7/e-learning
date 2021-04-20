<?php

namespace App\View\Components\commons;

use Illuminate\View\Component;

class Card extends Component
{
    public $course;

<<<<<<< HEAD
    public function __construct($course)
=======
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public function __construct($course = [])

>>>>>>> cfd0471cc4114c3f173f96b0889a8788da69d4c0
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
