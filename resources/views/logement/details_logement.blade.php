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
    <h1>{{ $logement->libelle_logement }}</h1>
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
        <h1>[Nom du logement] [n° du logement (id)] et [description rapide]</h1>
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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 

        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
        
        culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Paypal : Autorisé</p>
        <p>Condiditon d'annulation :</p>
        <h5>Flexibles :</h5>
        <p>Remboursement intégral jusqu’à 3 jours avant la date d’arrivée</p>
        <hr>
        <h1>Logements similaires :</h1>
        <p>Carte de 2 logements</p>
    </div>
      <div class="leStick">
          <p>à partir de : [prix] / mois</p>
          <p>Propriétaire : [nomProprio]</p>
          <ul>
            <li class="ville">Ville : [ville]</li>
          </ul>
          <ul>
            <li class="calendar">Disponibilité : dès maintenant ou pas disponible maintenant</li>
          </ul>
          <ul>
            <li class="dimension">Dimension : [dimension] m²</li>
          </ul>
          <ul>
            <li class="adresse">Adresse : [adresse]</li>
          </ul>
          <button type="button">Contacter le propriétaire</button>
      </div>
    </div>
    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>