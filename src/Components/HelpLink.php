<?php

namespace AscentCreative\Help\Components;

use Illuminate\View\Component;

class HelpLink extends Component
{


    public $key;
    public $title;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($key, $title=null)
    // public function __construct()
    {
        
        $this->key = $key;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('help::components.helplink');
    }
}
