<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
</head>
<body id="accueil">
    <x-Navbar></x-Navbar>
    <div>
        <div class="video-container">
            <img src="{{asset('/img/paysage.jpg')}}" />
        </div>
        <h1>Découvrez les meilleurs<br> logements<br> de toute la Bretagne</h1>
    </div>

    <section class="mieuxNote">
        <h2>Logements les mieux notés :</h2>
        <div class="liste-card">
            @foreach ($logements as $logement)
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
            @endforeach
        </div>
    </section>

    <section class="autres">
        <h2>Nos logements les plus récents</h2>
        <div class="listeBtnTri">
            <script>
                let tri = 0;
                function triPrix() {
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);
                    let btnTriPrix = document.querySelector("#btnTriPrix");
                    
                    if(tri == 0) {
                        tri = 1;
                        btnTriPrix.innerHTML = "Trier par prix décroissant";
                        tabCard.sort((a, b) => {
                            let prixA = parseInt(a.classList[1]);
                            let prixB = parseInt(b.classList[1]);
                            return prixA - prixB;
                        });
                    } else {
                        tri = 0;
                        btnTriPrix.innerHTML = "Trier par prix croissant";
                        tabCard.sort((a, b) => {
                            let prixA = parseInt(a.classList[1]);
                            let prixB = parseInt(b.classList[1]);
                            return prixB - prixA;
                        });
                    }

                    let conteneurCard = document.querySelector(".autres .liste-card");
                    conteneurCard.innerHTML = "";

                    tabCard.forEach((carte) => {
                        conteneurCard.appendChild(carte);
                    });    
                }

                function filtre() {
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);
                    let selectionFiltre = document.querySelector("#selectionFiltre");
                    let filtre = selectionFiltre.value;

                    tabCard.forEach((carte) => {
                        if (filtre == "Aucun") {
                            carte.style.display = "block";
                        }else if(carte.classList[2] != filtre) {
                            carte.style.display = "none";
                        } else {
                            carte.style.display = "block";
                        }
                    });
                }
            </script>
            <button id="btnTriPrix" onclick="triPrix()">Trier par prix croissant</button>
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
            <script>
                let select = document.getElementById("selectionFiltre");
                select.addEventListener("change", filtre);
            </script>
        </div>
        <div class="liste-card">
            @foreach ($logementsRecents as $logement)
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
            @endforeach
            <p id="msgFiltreVide" style="display: none;">Aucun logement ne correspond à vos critères de recherche</p>
            <script>
                let msgFiltreVide = document.getElementById("msgFiltreVide");
                let listeCard = document.querySelectorAll(".autres .liste-card .lienCard")[0];
                let tabCard = Array.from(listeCard);
                if(tabCard.length == 0) {
                    msgFiltreVide.style.display = "block";
                }
            </script>
        </div>
    </section>

    <x-Footer_client></x-Footer_client>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>