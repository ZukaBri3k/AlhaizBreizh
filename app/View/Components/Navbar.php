<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{

    public $role;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        dd("test");
        if(Auth::check()) {
            $this->role = Auth::user()->role;
        } else {
            $this->role = null;
        }

        return view('components.navbar', ["role" => $this->role]);
    }
}
