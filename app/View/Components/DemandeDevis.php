<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class demandeDevis extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $libelle_logement,
        public string $pseudo_client,
        public string $date_deb,
        public string $date_fin,
        public string $id_logement
    )
    {
        $this->libelle_logement = $libelle_logement;
        $this->pseudo_client = $pseudo_client;
        $this->date_deb = $date_deb;
        $this->date_fin = $date_fin;
        $this->id_logement = $id_logement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.demande-devis');
    }
}
