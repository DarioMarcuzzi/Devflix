<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Pelicula;

class avances extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public Pelicula $pelicula
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.avances');
    }
}
