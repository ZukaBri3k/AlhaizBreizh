<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <title>Mes logements - AlhaizBreizh</title>
</head>
<body class="mesLogementsPage">
    <x-Navbar></x-Navbar>
    <section class="mesDevis" id="sectionDevis">
        <h2>Mes demande de devis :</h2>
        @php 
            if(count($tabDevis) == 0){
                echo "<p class='aucunDevis'>Vous n'avez aucune demande de devis.</p>";
            }
        @endphp
        <div class="listeMesDevis">
        @foreach($tabDevis as $devis)
            @php
                $nomProprio = DB::select('select nom_pers from logement inner join personnes on logement.id_proprio_logement = personnes.id where logement.id = ?', [$devis->id_logement_reserv]);
                dd($nomProprio);
            @endphp
            <x-DemandeDevisClient libelle="{{$devis->libelle_logement}}" pseudo="{{$devis->pseudo_pers}}" dated="{{$devis->date_deb}}" datef="{{$devis->date_fin}}" id="{{$devis->id_logement}}" iddevis="{{$devis->ref_devis}}" idreservation="{{$devis->id_reserv}}" nomproprio="{{$devis->nom_pers}}"></x-DemandeDevisClient>
        @endforeach
        <hr>
    </section>

    <section class="mesReservations">
        <h2>Mes réservations :</h2>
        <div class="btnTriFiltre">
            <button id="btnTriDate" onclick="triDate()">Trier par date (du plus ancien)</button>
            <select id="selectionFiltre">
                <option value="Aucun">Tous</option>
                <option value="Appartement">Appartements</option>
                <option value="Villa">Villa</option>
                <option value="Maison">Maison</option>
                <option value="Bateau">Bateau</option>
                <option value="Mhote">Maison d'hôte</option>
                <option value="Chote">Chambre d'hôte</option>
                <option value="Cabane">Cabane</option>
                <option value="Caravane">Caravane</option>
            </select>
        </div>

        <div class="listeMesReservations">
            @foreach($tabReserv as $reserv)
                <x-Reservation libelle="{{$reserv->libelle_logement}}" pseudo="{{$reserv->pseudo_pers}}" dated="{{$reserv->date_deb}}" datef="{{$reserv->date_fin}}" id="{{$reserv->id_logement}}" iddevis="{{$reserv->ref_devis}}" idreservation="{{$reserv->id_reserv}}" prix="{{$reserv->prix_tot}}" natlogement="{{$reserv->nature_logement}}"></x-Reservation>
            @endforeach
        </div>
        <p id="msgFiltreVide" style="display: none;">Aucune réservation ne correspond à vos critère de recherche</p>
        @php 
            if(count($tabReserv) == 0){
                echo "<p class='aucuneReservation'>Vous n'avez aucune réservation.</p>";
            }
        @endphp
    </section>

    <x-FooterClient></x-FooterClient>
    <script src="{{asset('js/script_mes_logements.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>