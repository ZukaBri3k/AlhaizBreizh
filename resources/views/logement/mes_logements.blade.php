<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <title>Document</title>
</head>
<body class="mesLogementsPage">
    <x-Navbar></x-Navbar>
    
    <section class="mesLogements">
        <h2>Mes logements :</h2>

        <div class="listeMesLogement">
            @foreach($logements as $logement)
                <div class="logementEnLigne">
                    <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
                    @php
                        $textbouton = "Mettre hors ligne";
                        $classBtnHL = "HL";
    
                        if($logement->en_ligne == false){
                            $textbouton = "Mettre en ligne";
                            $classBtnHL = "EL";
                        }
                    @endphp
                    <a class="btnHL {{$classBtnHL}}" href="{{route('setHL', ['id' => $logement->id])}}">{{$textbouton}}</a>
                </div>
            @endforeach
        </div>
        <hr>
    </section>

    <section class="mesDevis">
        <h2>Mes demande de devis :</h2>
        @php 
            if(count($tabDevis) == 0){
                echo "<p class='aucunDevis'>Vous n'avez aucune demande de devis.</p>";
            }
        @endphp
        <div class="listeMesDevis">
            @foreach($tabDevis as $devis)
                <x-DemandeDevis libelle="{{$devis->libelle_logement}}" pseudo="{{$devis->pseudo_pers}}" dated="{{$devis->date_deb}}" datef="{{$devis->date_fin}}" id="{{$devis->id_logement}}" iddevis="{{$devis->ref_devis}}" idreservation="{{$devis->id_reserv}}"></x-DemandeDevis>
            @endforeach
        </div>
    </section>

    <section class="mesReservations">
        <h2>Mes réservations :</h2>
        @php 
            if(count($tabReserv) == 0){
                echo "<p class='aucuneReservation'>Vous n'avez aucune réservation.</p>";
            }
            @endphp

        <div class="btnTriFiltre">
            <script>
                function compareDates(dateString1, dateString2) {
                    var date1 = new Date(dateString1);
                    var date2 = new Date(dateString2);

                    // Comparaison des dates
                    if (date1 < date2) {
                        return -1;
                    } else if (date1 > date2) {
                        return 1;
                    } else {
                        return 0;
                    }
                }


                let tri = 0;
                function triDate() {
                    let ListeDevis = document.querySelectorAll(".listeMesReservations .devis");
                    let tabDevis = Array.from(ListeDevis);
                    let btnTriDate = document.querySelector("#btnTriDate");
                    
                    if(tri == 0) {
                        tri = 1;
                        btnTriDate.innerHTML = "Trier par date (du plus ancien)";
                        tabDevis.sort(compareDates);
                    } else {
                        tri = 0;
                        btnTriDate.innerHTML = "Trier par date (du plus récent)";
                        tabDevis.sort(compareDates);
                        tabDevis.reverse();
                    }

                    let conteneurDevis = document.querySelector(".listeMesReservations");
                    conteneurDevis.innerHTML = "";

                    tabDevis.forEach((carte) => {
                        conteneurDevis.appendChild(carte);
                    });    
                }
            </script>
            <button id="btnTriDate" onclick="triDate()">Trier par date (du plus récent)</button>
        </div>

        <div class="listeMesReservations">
            @foreach($tabReserv as $reserv)
                <x-Reservation libelle="{{$reserv->libelle_logement}}" pseudo="{{$reserv->pseudo_pers}}" dated="{{$reserv->date_deb}}" datef="{{$reserv->date_fin}}" id="{{$reserv->id_logement}}" iddevis="{{$reserv->ref_devis}}" idreservation="{{$reserv->id_reserv}}" prix="{{$reserv->prix_tot}}"></x-Reservation>
            @endforeach
        </div>
    </section>

    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>