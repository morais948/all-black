<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabela extends Component
{
    public $items;
    public $fields;
    public $contentFildes;
    public $prefixResource;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $fields, $contentFildes, $prefixResource)
    {
        $this->items = $items;
        $this->fields = $fields;
        $this->contentFildes = $contentFildes;
        $this->prefixResource = $prefixResource;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabela');
    }
}
