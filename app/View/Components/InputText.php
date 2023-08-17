<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{

    public const TYPES = ['text', 'checkbox', 'submit'];

    public function __construct(public string $type, public string $placeholder)
 // public function __construct(string $type) public yazilmadigi zaman type cagirmag lazimdi function icinde!!!
    {
        // $this->type = $type  // public olmadigi zaman bele cagiririg
    }

    public function render(): View|Closure|string
    {
        if(in_array($this->type, self::TYPES))
        {
            return view('components.input-text');
        }
        return "";
    }

}
