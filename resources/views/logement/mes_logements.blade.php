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
        <h2>Mes logements en ligne :</h2>

        <div class="listeMesLogement">
            @php $counter = 0; @endphp
            @foreach($logements as $logement)
                <div class="logementEnLigne">
                    @php
                        $textbouton = "Mettre hors ligne";
                        $classBtnHL = "HL";
                        $counter = 0;
    
                        if($logement->en_ligne == true) { 
                            $counter++; @endphp
                            <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
                            <a class="btnHL {{$classBtnHL}}" href="{{route('setHL', ['id' => $logement->id])}}">{{$textbouton}}</a>
                    @php }
                    @endphp
                </div>
            @endforeach
            @php 
                if($counter == 0) {
                    echo "<p class='aucunLogement'>Vous n'avez aucun logement en ligne.</p>";
                }
            @endphp
        </div>
    </section>
    <section class="mesLogements">
        <h2>Mes logements hors ligne :</h2>

        <div class="listeMesLogement">
            @php $counterEL = 0; @endphp
            @foreach($logements as $logement)
                <div class="logementEnLigne">
                    @php
                        $textbouton = "Mettre en ligne";
                        $classBtnHL = "EL";

                        if($logement->en_ligne == false) { 
                            $counterEL++;
                        @endphp
                            <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
                            <a class="btnHL {{$classBtnHL}}" href="{{route('setHL', ['id' => $logement->id])}}">{{$textbouton}}</a>
                    @php }
                    @endphp
                </div>
            @endforeach
            @php 
                if($counterEL == 0) {
                    echo "<p class='aucunLogement'>Vous n'avez aucun logement hors ligne.</p>";
                }
            @endphp
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
        <hr>
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
                        btnTriDate.innerHTML = "Trier par date (du plus récent)";
                        tabDevis.sort((a,b) => {
                            return compareDates(a.classList[1], b.classList[1]);
                        });
                    } else {
                        tri = 0;
                        btnTriDate.innerHTML = "Trier par date (du plus ancien)";
                        tabDevis.sort((a,b) => {
                            return compareDates(a.classList[1], b.classList[1]);
                        });
                        tabDevis.reverse();
                    }

                    let conteneurDevis = document.querySelector(".listeMesReservations");
                    conteneurDevis.innerHTML = "";

                    tabDevis.forEach((carte) => {
                        conteneurDevis.appendChild(carte);
                    });    
                }
            </script>
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
            <p id="msgFiltreVide" style="display: none;">Aucune réservation ne correspond à vos critère de recherche</p>
            <script>
                function filtre() {
                    let ListeDevis = document.querySelectorAll(".listeMesReservations .devis");
                    let tabDevis = Array.from(ListeDevis);
                    let selectionFiltre = document.querySelector("#selectionFiltre");
                    let filtre = selectionFiltre.value;
                    let counter = 0;

                    tabDevis.forEach((devis) => {
                        if (filtre == "Aucun") {
                            devis.style.display = "flex";
                            counter++;
                        }else if(devis.classList[2] != filtre) {
                            devis.style.display = "none";
                        } else {
                            devis.style.display = "flex";
                            counter++;
                        }
                    });

                    let msgFiltreVide = document.getElementById("msgFiltreVide");

                    if(counter == 0) {
                        msgFiltreVide.style.display = "block";
                    } else {
                        msgFiltreVide.style.display = "none";
                    }
                }

                let select = document.getElementById("selectionFiltre");
                select.addEventListener("change", filtre);
            </script>
        </div>
    </section>

    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>