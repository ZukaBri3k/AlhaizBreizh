<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class FooterClient extends Component
{
    public $role;
    public $id;

    public function __construct()
    {
        if(Auth::check()) {
            $this->id = Auth::user()->id;
            $this->role = Auth::user()->role;
        } else {
            $this->role = null;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer_client');
    }
}
