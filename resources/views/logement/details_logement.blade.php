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
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              <div>
              <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/img/orlova.png')}}" class="d-block w-100">
              <div>
              <img src="{{asset('/img/auray.png')}}" class="d-block w-100">
              <img src="{{asset('/img/rola.png')}}" class="d-block w-100">
              </div>
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
        <h1>{!! $logement->libelle_logement !!} n°{!! $logement->id_logement !!} / {!! $logement->accroche_logement !!}</h1>
        <h1>Nature et type de logement :</h1>
        <div class="Caracteristiques">
          @php
            if (sizeof($logement->amenagement_propose_logement) > 1) {
              $amenagement = [];
              $amenagement = explode(";", $logement->amenagement_propose_logement);
            } else {
              $amenagement = $logement->amenagement_propose_logement;
            }

            if (sizeof($logement->installation_logement) > 1) {
              $installation = [];
              $installation = explode(";", $logement->installation_logement);
            } else {
              $installation = $logement->installation_logement;
            }

            if (sizeof($logement->service_logement) > 1) {
              $service = [];
              $service = explode(";", $logement->service_logement);
            } else {
              $service = $logement->service_logement;
            }

            if (sizeof($logement->equipement_logement) > 1) {
              $equipement = [];
              $equipement = explode(";", $logement->equipement_logement);
            } else {
              $equipement = $logement->equipement_logement;
            }
          @endphp
          <div class="rectangle">
            @php
              $nature = strtolower($logement->nature_logement);
            @endphp
              <img src="{{asset('/img/nature/'.$nature.'.png')}}" class="d-block w-100">
              <p>{{ $logement->nature_logement }}</p>
          </div>
          <div class="rectangle">
            @php
                $type = strtolower($logement->type_logement);
            @endphp
              <img src="{{asset('/img/type/'.$type.'.png')}}" class="d-block w-100">
            <p>{!! $logement->type_logement !!}</p>
          </div>
        </div>
        <h1>Aménagements, installations :</h1>
        <div class="Caracteristiques">
          @php
            if(sizeof($amenagement) == 1) {
            $value = strtolower($amenagement);
          @endphp
            <div class="rectangle">
              <img src="{{asset('/img/amenagement/' . $value . '.png')}}" class="d-block w-100">
              <p>{!! $amenagement !!}</p>
            </div>
          @php
            }
          elseif(sizeof($amenagement) > 1) {
          foreach ($amenagement as $values)
          $value = strtolower($values);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/amenagement/' . $value . '.png')}}" class="d-block w-100">
            <p>{!! $values !!}</p>
          </div>
          @php
          }
            foreach ($installation as $values)
              $value = strtolower($values);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/installations/' . $value . '.png')}}" class="d-block w-100">
            <p>{!! $values !!}</p>
          </div>
          @endforeach
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
      <div class="Condition_annul">
        <h5>Flexibles :</h5>
        <p>Remboursement intégral jusqu’à 3 jours avant la date d’arrivée</p>
      </div>
      <h1>Nombre de chambre, lit et salle de bain :</h1>
      <p class="nb_chambre">Il y'a {{ $logement->nb_chambre_logement }} Chambre(s)</p>
        @foreach ($chambre as $values)
        @php
          $n = $loop->iteration;
        @endphp
        <br>
        <div class="chambre">
          <p>Chambre n°{{ $n }}</p>
          <p>Elle possède : {{ $values->nb_lit_simple }} lit(s) simple(s)</p>
          <p>Elle possède : {{ $values->nb_lit_double }} lit(s) double(s)</p>
          <p>Détail des lits de la chambre : {{ $values->details_lit }}</p>
        </div>
        <br>
        @endforeach
        @if ($paypal[0]->paypal_proprio == null)
          <p class="not_paypal">Le propriétaire n'a pas paypal</p>
        @else
          <p class="have_paypal">Le propriétaire a paypal</p>
        @endif
        <br>
    </div>
      <div class="leStick">
          <p>à partir de : {{ $logement->prix_logement }} / mois</p>
          <p>Propriétaire : {{ $nom_proprio[0]->nom_pers }}</p>
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