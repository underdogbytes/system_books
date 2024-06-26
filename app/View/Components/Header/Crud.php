<?php

namespace App\View\Components\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Crud extends Component
{
    public $title;
    public $btns;
    public function __construct($title, $btns)
    {
        $this->title = $title;
        $this->btns = $btns;
    }

    public function render(): View|Closure|string
    {
        return view('components.header.crud');
    }
}
