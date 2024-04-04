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
        $id_resa = DB::select('select id_reserv from reservation inner join devis on reservation.facture_reserv = devis.ref_devis inner join logement on reservation.id_logement_reserv = logement.id_logement where id_client_devis = ? and id_logement = ?', [auth()->user()->id, intval($this->idlogement)]);
                if($id_resa != null){
                    $resa = DB::select('select id_reserv_avis from avis inner join reservation on avis.id_reserv_avis = reservation.id_reserv inner join logement on avis.id_logement_avis = logement.id_logement where id_reserv = ? and id_logement_avis = ?', [$id_resa[0]->id_reserv, intval($this->idlogement)]);
                    if($resa != null) {
                        $bool_resa = true;
                    }
                    else {
                        $bool_resa = false;
                    }
                } else {
                    $bool_resa = false;
                }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reservation', [
            'bool_resa' => $bool_resa
        ]);
    }
}
