<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Reservation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $libelle,
        public string $pseudo,
        public string $dated,
        public string $datef,
        public string $id,
        public string $iddevis,
        public string $idreservation,
        public string $prix,
        public string $natLogement
    )
    {
        $this->libelle = $libelle;
        $this->pseudo = $pseudo;
        $this->dated = $dated;
        $this->datef = $datef;
        $this->idlogement = $id;
        $this->iddevis = $iddevis;
        $this->idreservation = $idreservation;
        $this->prix = $prix;
        $this->natLogement = $natLogement;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reservation');
    }
}
