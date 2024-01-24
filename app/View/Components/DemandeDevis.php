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
        public string $pseudoClient,
        public string $dateDeb,
        public string $dateFin,
        public string $idLogement
    )
    {
        $this->libelle = $libelle;
        $this->pseudo = $pseudoClient;
        $this->dated = $dateDeb;
        $this->datef = $dateFin;
        $this->idlogement = $idLogement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.demande-devis');
    }
}
