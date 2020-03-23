<?php

namespace Hexters\Ladmin\Components;

use Illuminate\View\Component;

class Datatables extends Component {
    
    public $fields;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fields, $options) {
        $this->fields = $fields;
        $this->options = $options ?? [];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('ladmin::components.datatables');
    }
}