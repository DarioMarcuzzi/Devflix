<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pregunta extends Component
{
    public $pregunta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pregunta)
    {
        $this->pregunta = $pregunta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pregunta');
    }
}
