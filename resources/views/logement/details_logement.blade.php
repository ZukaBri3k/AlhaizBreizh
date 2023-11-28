<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/styles_detail_logement.css')}}" rel="stylesheet"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <x-Navbar></x-Navbar>
    <!--Code pour le carrousel-->
    <div class="carou">
      <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-inner" id="carousel">
            <div class="carousel-item active">
              <img src="{{asset('/img/auray.png')}}" class="d-block w-100">
              <div>
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/rola.png" class="d-block w-100">
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              <div>
              <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/orlova.png" class="d-block w-100">
                <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
              <div>
              <img src="{{asset('/img/auray.png')}}" class="d-block w-100">
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="{{asset('/img/auray.png')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="images/orlova.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
            </div>
          </div>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="second">
      <div>
        <h1>{{ $logement->libelle_logement }} n°{{ $logement->id_logement }} / {{ $logement->accroche_logement }}</h1>
        <h1>Nature et type de logement :</h1>
        <div class="Caracteristiques">
          <div class="rectangle">
              <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
          <div class="rectangle">
              <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
        </div>
        <h1>Aménagements, installations :</h1>
        <div class="Caracteristiques">
          <div class="rectangle">
            <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
          <div class="rectangle">
            <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
          <div class="rectangle">
            <<img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
        </div>
        <h1>Services, Equipements :</h1>
        <div class="Caracteristiques">
          <div class="rectangle">
            <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
          <div class="rectangle">
            <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
          <div class="rectangle">
            <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
      </div>
      <h1>Charges additionnelles:</h1>
        <div class="Caracteristiques">
          <div class="rectangle">
            <img src="{{asset('/img/type/maison.png')}}" class="d-block w-100">
            <p>Maison</p>
          </div>
      </div>
      <h1>Description :</h1>
      <p>{{ $logement->descriptif_logement }}</p>
        <p>Condiditon d'annulation :</p>
        <h5>Flexibles :</h5>
        <p>Remboursement intégral jusqu’à 3 jours avant la date d’arrivée</p>
        <h1>Nombre de chambre, lit et salle de bain :</h1>
        <p>{{ $logement->nb_chambre_logement }} Chambre(s)</p>
        @foreach ($chambre as $values)
          <p>Chambre n°$i</p>
          <p>Elle possède : {{ $values->nb_lit_simple }} lit(s) simple(s)</p>
          <p>Elle possède : {{ $values->nb_lit_double }} lit(s) double(s)</p>
          <p>Détail des lits de la chambre : {{ $values->details_lit }}</p>
        @endforeach
        @if ($paypal[0]->paypal_proprio == null)
          <p>Le propriétaire n'a pas paypal</p>
        @else
          <p>Le propriétaire a paypal</p>
        @endif
        <hr>
        <h1>Logements similaires :</h1>
        <p>Carte de 2 logements</p>
    </div>
      <div class="leStick">
          <p>à partir de : {{ $logement->prix_logement }} / mois</p>
          <p>Propriétaire : {{ $nom_proprio->nom_pers }}</p>
          <p>Nombre de personne max : {{ $logement->nb_personne_max }}</p>
          <ul>
            <li class="ville">Ville : {{ $logement->ville_logement }}</li>
          </ul>
          <ul>
            <li class="calendar">Disponibilité : dès maintenant ou pas disponible maintenant</li>
          </ul>
          <ul>
            <li class="dimension">Dimension : {{ $logement->surface_habitable_logement }} m²</li>
          </ul>
          <ul>
            <li class="adresse">Adresse : {{ $logement->adresse_logement }}</li>
          </ul>
          <button type="button">Contacter le propriétaire</button>
      </div>
    </div>
    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>