<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TinyMCE_editor extends Component
{
    public $id;
    public $name;
    public $rows;

    /**
     * Create a new component instance.
     *
     * @param string $id
     * @param string $name
     * @param int $rows
     */
    public function __construct($id = 'editor', $name = 'content', $rows = 10)
    {
        $this->id = $id;
        $this->name = $name;
        $this->rows = $rows;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tiny-m-c-e_editor');
    }
}
