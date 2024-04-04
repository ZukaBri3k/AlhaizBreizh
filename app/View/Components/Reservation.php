<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Reservation extends Component
{
    /**
     * Create a new component instance.
     */

    public $role;
    public $avisExist;

    public function __construct(
        public string $libelle,
        public string $pseudo,
        public string $dated,
        public string $datef,
        public string $id,
        public string $iddevis,
        public string $idreservation,
        public string $prix,
        public string $natlogement
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
        $this->natlogement = $natlogement;
        if (Auth::check()) {
            $this->role = Auth::user()->role;
            // Vérification de la présence d'un avis pour cette réservation et ce logement
            $id_resa = DB::select('
                SELECT id_reserv 
                FROM reservation 
                INNER JOIN devis ON reservation.facture_reserv = devis.ref_devis 
                INNER JOIN logement ON reservation.id_logement_reserv = logement.id_logement 
                WHERE id_client_devis = ? AND id_logement = ?', 
                [Auth::user()->id, $id]
            );
            $this->avisExist = DB::select('
                SELECT id_reserv_avis 
                FROM avis 
                INNER JOIN reservation ON avis.id_reserv_avis = reservation.id_reserv 
                INNER JOIN logement ON avis.id_logement_avis = logement.id_logement 
                WHERE id_reserv = ? AND id_logement_avis = ?', 
                [$id_resa[0]->id_reserv, $id]
            );
        } else {
            $this->role = null;
            $this->avisExist = null;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reservation', [
            'avisExist' => $this->avisExist,
        ]);
    }
}
