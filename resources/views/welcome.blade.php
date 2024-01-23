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
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}"></x-Card>
            @endforeach
        </div>
    </section>

    <section class="autres">
        <h2>Nos logements les plus récents</h2>
        <div>
            <script>

                function test() {
                    
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);

                    tabCard.sort((a, b) => {
                        let prixA = parseInt(a.classList[2]);
                        let prixB = parseInt(b.classList[2]);
                        return prixA - prixB;
                    });
                    
                    let conteneurCard = document.querySelector(".autres .liste-card");
                    conteneurCard.innerHTML = "";

                    tabCard.forEach((carte) => {
                        conteneurCard.appendChild(carte);
                    });

                    //console.log(tabCard);
                    
                }
            </script>
            <button onclick="test()">Test</button>
        </div>
        <div class="liste-card">
            @foreach ($logementsRecents as $logement)
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}"></x-Card>
            @endforeach
        </div>
    </section>

    <x-Footer_client></x-Footer_client>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>