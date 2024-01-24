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
        string $libelle_logement,
        string $pseudo_client,
        string $date_deb,
        string $date_fin,
        string $id_logement
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
