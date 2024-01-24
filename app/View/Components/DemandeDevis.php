<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DemandeDevis extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $libelle,
        public string $pseudo,
        public string $dated,
        public string $datef,
        public string $id
    )
    {
        $this->libelle = $libelle;
        $this->pseudo = $pseudo;
        $this->dated = $dated;
        $this->datef = $datef;
        $this->idlogement = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.demande-devis');
    }
}
