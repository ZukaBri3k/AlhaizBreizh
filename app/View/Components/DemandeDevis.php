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
        $this->pseudo_client = $pseudoClient;
        $this->date_deb = $dateDeb;
        $this->date_fin = $dateFin;
        $this->id_logement = $idLogement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.demande-devis');
    }
}
