<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $titre,
        public string $desc,
        public int $note,
        public string $prix,
        public string $lien
        )
    {
        $this->titre = $titre;
        $this->desc = $desc;
        $this->note = $note;
        $this->prix = $prix;
        $this->lien = $lien;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
