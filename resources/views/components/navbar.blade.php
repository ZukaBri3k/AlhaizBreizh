<link rel="stylesheet" href="{{asset('css/main.css')}}">
@auth
@if ($role == 1)
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" type='text/css' href="{{asset('css/connexion.css')}}">
<nav class="navbar navbar-expand-lg" style="width: 100%">
    <div class="container-fluid">
        <a href="{{route('accueil')}}" class="navbar-brand logo_d" style="width: 10%; margin-left: 7%">
            <img src="{{asset('/img/Logo_desktop.png')}}" class="d-inline-block align-top" style="width: 100%;"/>
        </a>
        <a href="{{route('accueil')}}" class="navbar-brand logo_m">
            <img src="{{asset('/img/Logo_mobile.png')}}" class="d-inline-block align-top" style="width: 15%"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto p-2 rounded" style="background-color: #EC3B53;">
                <li class="navbar-item active dropdown separer">
                    <a href="#" class="nav-link dropdown-toggle" style="color: #F6F5EE" id="Departement" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Département
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="Departement" style="background-color: #F6F5EE; visibility: hidden;">
                        <li><a class="dropdown-item" href="#">Côtes-d'Armor</a></li>
                        <li><a class="dropdown-item" href="#">Île-et-Vilaine</a></li>
                        <li><a class="dropdown-item" href="#">Morbihan</a></li>
                        <li><a class="dropdown-item" href="#">Finistère</a></li>
                    </ul>
                </li>
                <li class="navbar-item active separer">
                    <a href="#" class="nav-link" style="color: #F6F5EE">
                        Arrivée
                    </a>
                </li>
                <li class="navbar-item active separer">
                    <a href="#" class="nav-link" style="color: #F6F5EE">
                        Départ
                    </a>
                </li>
                <form class="d-flex ms-2">
                    <input type="text" class="form-control me-2">
                    <button type="submit" style="background: none; border: none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F6F5EE" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex" style="margin-right: 7%">
                <li class="navbar-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color: #F6F5EE" id="inscription" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg fill="#000000" height="75px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 402.161 402.161" xml:space="preserve" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M201.08,49.778c-38.794,0-70.355,31.561-70.355,70.355c0,18.828,7.425,40.193,19.862,57.151 c14.067,19.181,32,29.745,50.493,29.745c18.494,0,36.426-10.563,50.494-29.745c12.437-16.958,19.862-38.323,19.862-57.151 C271.436,81.339,239.874,49.778,201.08,49.778z M201.08,192.029c-13.396,0-27.391-8.607-38.397-23.616 c-10.46-14.262-16.958-32.762-16.958-48.28c0-30.523,24.832-55.355,55.355-55.355s55.355,24.832,55.355,55.355 C256.436,151.824,230.372,192.029,201.08,192.029z"></path> <path d="M201.08,0C109.387,0,34.788,74.598,34.788,166.292c0,91.693,74.598,166.292,166.292,166.292 s166.292-74.598,166.292-166.292C367.372,74.598,292.773,0,201.08,0z M201.08,317.584c-30.099-0.001-58.171-8.839-81.763-24.052 c0.82-22.969,11.218-44.503,28.824-59.454c6.996-5.941,17.212-6.59,25.422-1.615c8.868,5.374,18.127,8.099,27.52,8.099 c9.391,0,18.647-2.724,27.511-8.095c8.201-4.97,18.39-4.345,25.353,1.555c17.619,14.93,28.076,36.526,28.895,59.512 C259.25,308.746,231.178,317.584,201.08,317.584z M296.981,283.218c-3.239-23.483-15.011-45.111-33.337-60.64 c-11.89-10.074-29.1-11.256-42.824-2.939c-12.974,7.861-26.506,7.86-39.483-0.004c-13.74-8.327-30.981-7.116-42.906,3.01 c-18.31,15.549-30.035,37.115-33.265,60.563c-33.789-27.77-55.378-69.868-55.378-116.915C49.788,82.869,117.658,15,201.08,15 c83.423,0,151.292,67.869,151.292,151.292C352.372,213.345,330.778,255.448,296.981,283.218z"></path> <path d="M302.806,352.372H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,355.73,306.948,352.372,302.806,352.372z"></path> <path d="M302.806,387.161H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,390.519,306.948,387.161,302.806,387.161z"></path> </g> </g> </g> </g></svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="inscription" style="z-index: 50;">
                        <li><a href="{{ route('myClientAccount', ['id' => $id])}}" class="dropdown-item">Profil</a></li>
                        <li><a href="{{route('mes_logements_client')}}" class="dropdown-item">Mes réservations</a></li>
                        <li><a href="#" class="dropdown-item" id="connexionButton">Mon compte propriétaire</a></li>
                        <li><a href="{{ route('logout') }}" class="dropdown-item deconnexion">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr>
  <div id="popup" class="popup">
    <div class="container py-5 h-100 center-popup">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <span class="close" id="closeButton">&times;</span>
                    <div class="text-center">
                        <img src="{{asset('/img/Logo_desktop.png')}}" style="width: 185px;" alt="logo">
                      </div>
                      <form action="{{ route('authenticate') }}" method="post">    
                        @csrf
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeCompte" id="radioOption1" value="option1" checked>
                          <label class="form-check-label" for="radioOption1">Client</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeCompte" id="radioOption2" value="option2">
                          <label class="form-check-label" for="radioOption2">Propriétaire</label>
                        </div>  
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mail_pers">email</label>
                          <input type="email" id="form2Example11" name="mail_pers" class="form-control" placeholder="adresse mail" />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mdp_pers">mot de passe</label>
                          <input type="password" id="form2Example22" name="mdp_pers" class="form-control" placeholder="mot de passe" />
                        </div>
                        @foreach($errors->all() as $error)
                          {{ $error }}
                        @endforeach 
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg mb-3" id="connexion" type="submit" disabled>Connexion</button>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">pas de compte ?</p>
                          <button type="button" class="btn btn-outline-danger">Créer un compte</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center fondfou">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="blur-background" class="blur-background"></div>
    <script src="https://unpkg.com/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
  document.getElementById('form2Example11').addEventListener('input', checkInput);
  document.getElementById('form2Example22').addEventListener('input', checkInput);

  function checkInput() {
    var email = document.getElementById('form2Example11').value;
    var password = document.getElementById('form2Example22').value;
    if (email && password) {
      document.querySelector('.btn-primary').disabled = false;
    } else {
      document.querySelector('.btn-primary').disabled = true;
    }
  }

  // Call checkInput to set the initial state of the button
  checkInput();

  var images = ['{{asset('/img/beau.png')}}', '{{asset('/img/tresbeau.png')}}'];
  var index = 0;

  function changeBackground() {
    document.querySelector('.fondfou').style.backgroundImage = 'url(' + images[index] + ')';
    index = (index + 1) % images.length;
  }

  // Set initial background
  changeBackground();

  // Change background every 3 seconds
  setInterval(changeBackground, 5000);

  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('connexionButton').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('popup').style.display = 'block';
        applyBlur();
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        removeBlur();
    });

    document.getElementById('blur-background').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        removeBlur();
    });
});

function applyBlur() {
    // Ajoutez la classe 'blur-background' à tous les éléments de la page, sauf la popup
    Array.from(document.body.children).forEach(child => {
        if (child.id !== 'popup' && child.id !== 'blur-background') {
            child.classList.add('blur-background');
        }
    });
}

function removeBlur() {
    // Supprimez la classe 'blur-background' de tous les éléments de la page
    Array.from(document.body.children).forEach(child => {
        if (child.id !== 'popup' && child.id !== 'blur-background') {
            child.classList.remove('blur-background');
        }
    });
}

let deconnexionNavBar = document.getElementsByClassName('deconnexion');
deconnexionNavBar = Array.from(deconnexionNavBar);

deconnexionNavBar.forEach((btn) => {
  btn.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;

    Swal.fire({
        title: "Êtes vous sûr de vouloir vous déconnectez ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#21610B",
        cancelButtonColor: "#EC3B53",
        background: '#F6F5EE',
        cancelButtonText: "Annuler",
        confirmButtonText: "Confirmer",
        allowOutsideClick: false,
        customClass: {
            title: 'generation_cle'
        },
    }).then((result) => {
        window.location.href = url;
      });
  });
});

</script>
    <script src="{{ asset('js/connexion.js') }}"></script>
@elseif ($role == 2)
<link rel="stylesheet" type='text/css' href="{{asset('css/connexion.css')}}">
<nav class="navbar navbar-expand-lg" style="width: 100%">
    <div class="container-fluid">
        <a href="{{route('accueil')}}" class="navbar-brand logo_d" style="width: 10%; margin-left: 7%">
            <img src="{{asset('/img/Logo_desktop.png')}}" class="d-inline-block align-top" style="width: 100%;"/>
        </a>
        <a href="{{route('accueil')}}" class="navbar-brand logo_m">
            <img src="{{asset('/img/Logo_mobile.png')}}" class="d-inline-block align-top" style="width: 15%"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto p-2 rounded" style="background-color: #EC3B53;">
                <li class="navbar-item active dropdown separer">
                    <a href="#" class="nav-link dropdown-toggle" style="color: #F6F5EE" id="Departement" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Département
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="Departement" style="background-color: #F6F5EE; visibility: hidden;">
                        <li><a class="dropdown-item" href="#">Côtes-d'Armor</a></li>
                        <li><a class="dropdown-item" href="#">Île-et-Vilaine</a></li>
                        <li><a class="dropdown-item" href="#">Morbihan</a></li>
                        <li><a class="dropdown-item" href="#">Finistère</a></li>
                    </ul>
                </li>
                <li class="navbar-item active separer">
                    <a href="#" class="nav-link" style="color: #F6F5EE">
                        Arrivée
                    </a>
                </li>
                <li class="navbar-item active separer">
                    <a href="#" class="nav-link" style="color: #F6F5EE">
                        Départ
                    </a>
                </li>
                <form class="d-flex ms-2">
                    <input type="text" class="form-control me-2">
                    <button type="submit" style="background: none; border: none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F6F5EE" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex" style="margin-right: 7%">
                <li class="navbar-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" style="color: #F6F5EE" id="inscription" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg fill="#000000" height="75px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 402.161 402.161" xml:space="preserve" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M201.08,49.778c-38.794,0-70.355,31.561-70.355,70.355c0,18.828,7.425,40.193,19.862,57.151 c14.067,19.181,32,29.745,50.493,29.745c18.494,0,36.426-10.563,50.494-29.745c12.437-16.958,19.862-38.323,19.862-57.151 C271.436,81.339,239.874,49.778,201.08,49.778z M201.08,192.029c-13.396,0-27.391-8.607-38.397-23.616 c-10.46-14.262-16.958-32.762-16.958-48.28c0-30.523,24.832-55.355,55.355-55.355s55.355,24.832,55.355,55.355 C256.436,151.824,230.372,192.029,201.08,192.029z"></path> <path d="M201.08,0C109.387,0,34.788,74.598,34.788,166.292c0,91.693,74.598,166.292,166.292,166.292 s166.292-74.598,166.292-166.292C367.372,74.598,292.773,0,201.08,0z M201.08,317.584c-30.099-0.001-58.171-8.839-81.763-24.052 c0.82-22.969,11.218-44.503,28.824-59.454c6.996-5.941,17.212-6.59,25.422-1.615c8.868,5.374,18.127,8.099,27.52,8.099 c9.391,0,18.647-2.724,27.511-8.095c8.201-4.97,18.39-4.345,25.353,1.555c17.619,14.93,28.076,36.526,28.895,59.512 C259.25,308.746,231.178,317.584,201.08,317.584z M296.981,283.218c-3.239-23.483-15.011-45.111-33.337-60.64 c-11.89-10.074-29.1-11.256-42.824-2.939c-12.974,7.861-26.506,7.86-39.483-0.004c-13.74-8.327-30.981-7.116-42.906,3.01 c-18.31,15.549-30.035,37.115-33.265,60.563c-33.789-27.77-55.378-69.868-55.378-116.915C49.788,82.869,117.658,15,201.08,15 c83.423,0,151.292,67.869,151.292,151.292C352.372,213.345,330.778,255.448,296.981,283.218z"></path> <path d="M302.806,352.372H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,355.73,306.948,352.372,302.806,352.372z"></path> <path d="M302.806,387.161H99.354c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h203.452c4.142,0,7.5-3.358,7.5-7.5 C310.307,390.519,306.948,387.161,302.806,387.161z"></path> </g> </g> </g> </g></svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="inscription" style="z-index: 50;">
                        <li><a href="{{ route('myProprietaireAccount', ['id' => $id])}}" class="dropdown-item">Profil</a></li>
                        <li><a href="{{route('mes_logements')}}" class="dropdown-item">Mes logements</a></li>
                        <li><a href="#" class="dropdown-item" id="connexionButton">Mon Compte Client</a></li>
                        <li><a href="{{ route('logout') }}" class="dropdown-item deconnexion">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr>
  <div id="popup" class="popup">
    <div class="container py-5 h-100 center-popup">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <span class="close" id="closeButton">&times;</span>
                    <div class="text-center">
                    <img src="{{asset('/img/Logo_desktop.png')}}" style="width: 185px;" alt="logo">
                      </div>
                      <form action="{{ route('authenticate') }}" method="post"> 
                        @csrf
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeCompte" id="radioOption1" value="option1" checked>
                          <label class="form-check-label" for="radioOption1">Client</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeCompte" id="radioOption2" value="option2">
                          <label class="form-check-label" for="radioOption2">Propriétaire</label>
                        </div>  
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mail_pers">email</label>
                          <input type="email" id="form2Example11" name="mail_pers" class="form-control" placeholder="adresse mail" />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mdp_pers">mot de passe</label>
                          <input type="password" id="form2Example22" name="mdp_pers" class="form-control" placeholder="mot de passe" />
                        </div>
                        @foreach($errors->all() as $error)
                          {{ $error }}
                        @endforeach 
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg mb-3" id="connexion" type="submit" disabled>Connexion</button>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">pas de compte ?</p>
                          <button type="button" class="btn btn-outline-danger">Créer un compte</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center fondfou">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="blur-background" class="blur-background"></div>
    <script src="https://unpkg.com/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
  document.getElementById('form2Example11').addEventListener('input', checkInput);
  document.getElementById('form2Example22').addEventListener('input', checkInput);

  function checkInput() {
    var email = document.getElementById('form2Example11').value;
    var password = document.getElementById('form2Example22').value;
    if (email && password) {
      document.querySelector('.btn-primary').disabled = false;
    } else {
      document.querySelector('.btn-primary').disabled = true;
    }
  }

  // Call checkInput to set the initial state of the button
  checkInput();

  var images = ['{{asset('/img/beau.png')}}', '{{asset('/img/tresbeau.png')}}'];
  var index = 0;

  function changeBackground() {
    document.querySelector('.fondfou').style.backgroundImage = 'url(' + images[index] + ')';
    index = (index + 1) % images.length;
  }

  // Set initial background
  changeBackground();

  // Change background every 3 seconds
  setInterval(changeBackground, 5000);

  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('connexionButton').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('popup').style.display = 'block';
        applyBlur();
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        removeBlur();
    });

    document.getElementById('blur-background').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        removeBlur();
    });
});

function applyBlur() {
    // Ajoutez la classe 'blur-background' à tous les éléments de la page, sauf la popup
    Array.from(document.body.children).forEach(child => {
        if (child.id !== 'popup' && child.id !== 'blur-background') {
            child.classList.add('blur-background');
        }
    });
}

function removeBlur() {
    // Supprimez la classe 'blur-background' de tous les éléments de la page
    Array.from(document.body.children).forEach(child => {
        if (child.id !== 'popup' && child.id !== 'blur-background') {
            child.classList.remove('blur-background');
        }
    });
}


let deconnexionNavBar = document.getElementsByClassName('deconnexion');
deconnexionNavBar = Array.from(deconnexionNavBar);

deconnexionNavBar.forEach((btn) => {
  btn.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;

    Swal.fire({
        title: "Êtes vous sûr de vouloir vous déconnectez ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#21610B",
        cancelButtonColor: "#EC3B53",
        background: '#F6F5EE',
        cancelButtonText: "Annuler",
        confirmButtonText: "Confirmer",
        allowOutsideClick: false,
        customClass: {
            title: 'generation_cle'
        },
    }).then((result) => {
        window.location.href = url;
      });
  });
});


</script>
    <div id="blur-background" class="blur-background"></div>

    <script src="{{ asset('js/connexion.js') }}"></script>
@endif
@endauth
@guest
<link rel="stylesheet" href="{{asset('css/connexion.css')}}">
<nav class="navbar navbar-expand-lg" style="width: 100%">
    <div class="container-fluid">
        <a href="{{route('accueil')}}" class="navbar-brand logo_d" style="width: 10%; margin-left: 7%">
            <img src="{{asset('/img/Logo_desktop.png')}}" class="d-inline-block align-top" style="width: 100%;"/>
        </a>
        <a href="{{route('accueil')}}" class="navbar-brand logo_m">
            <img src="{{asset('/img/Logo_mobile.png')}}" class="d-inline-block align-top" style="width: 15%"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto p-2 rounded" style="background-color: #EC3B53;">
                <li class="navbar-item active dropdown separer">
                    <a href="#" class="nav-link dropdown-toggle" style="color: #F6F5EE" id="Departement" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Département
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="Departement" style="background-color: #F6F5EE">
                        <li><a class="dropdown-item" href="#">Côtes-d'Armor</a></li>
                        <li><a class="dropdown-item" href="#">Île-et-Vilaine</a></li>
                        <li><a class="dropdown-item" href="#">Morbihan</a></li>
                        <li><a class="dropdown-item" href="#">Finistère</a></li>
                    </ul>
                </li>
                <li class="navbar-item active separer">
                    <a href="#" class="nav-link" style="color: #F6F5EE">
                        Arrivée
                    </a>
                </li>
                <li class="navbar-item active separer">
                    <a href="#" class="nav-link" style="color: #F6F5EE">
                        Départ
                    </a>
                </li>
                <form class="d-flex ms-2">
                    <input type="text" class="form-control me-2">
                    <button type="submit" style="background: none; border: none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F6F5EE" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex" style="display: flex!important;" id="listeBtnConnexion">
                <li class="navbar-item active">
                    <a href="#" class="nav-link" id="connexionButton" style="color: #EC3B53">
                        Connexion
                    </a>
                </li>
                <li class="navbar-item active">
                    <a href="{{route('inscription_client')}}" class="nav-link" style="color: #EC3B53">
                        Inscription
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr>
  <div id="popup" class="popup">
    <div class="container py-5 h-100 center-popup">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <span class="close" id="closeButton">&times;</span>
                    <div class="text-center">
                    <img src="{{asset('/img/Logo_desktop.png')}}" style="width: 185px;" alt="logo">
                      </div>
                      <form action="{{ route('authenticate') }}" method="post">  
                        @csrf
                        <div id="radios">
                          <div class="form-check" id="radio_btn_placement_client">
                            <input class="form-check-input" type="radio" name="typeCompte" id="radioOption1" value="client" checked>
                            <label class="form-check-label" for="radioOption1" id="label_radio">Client</label>
                          </div>
                          <div class="form-check" id="radio_btn_placement_proprio">
                            <input class="form-check-input" type="radio" name="typeCompte" id="radioOption2" value="proprietaire">
                            <label class="form-check-label" for="radioOption2" id="label_radio">Propriétaire</label>
                          </div>  
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mail_pers">email</label>
                          <input type="email" id="form2Example11" name="mail_pers" class="form-control" placeholder="adresse mail" />
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mdp_pers">mot de passe</label>
                          <input type="password" id="form2Example22" name="mdp_pers" class="form-control" placeholder="mot de passe" />
                        </div>
                        @foreach($errors->all() as $error)
                          {{ $error }}
                        @endforeach 
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg mb-3" id="connexion" type="submit" disabled>Connexion</button>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">pas de compte ?</p>
                          <button type="button" class="btn btn-outline-danger">Créer un compte</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center fondfou">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script>
  document.getElementById('form2Example11').addEventListener('input', checkInput);
  document.getElementById('form2Example22').addEventListener('input', checkInput);

  function checkInput() {
    var email = document.getElementById('form2Example11').value;
    var password = document.getElementById('form2Example22').value;
    if (email && password) {
      document.querySelector('.btn-primary').disabled = false;
    } else {
      document.querySelector('.btn-primary').disabled = true;
    }
  }

  // Call checkInput to set the initial state of the button
  checkInput();

  var images = ['{{asset('/img/beau.png')}}', '{{asset('/img/tresbeau.png')}}'];
  var index = 0;

  function changeBackground() {
    document.querySelector('.fondfou').style.backgroundImage = 'url(' + images[index] + ')';
    index = (index + 1) % images.length;
  }

  // Set initial background
  changeBackground();

  // Change background every 3 seconds
  setInterval(changeBackground, 5000);

  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('connexionButton').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('popup').style.display = 'block';
        applyBlur();
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        removeBlur();
    });

    document.getElementById('blur-background').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        removeBlur();
    });
});

function applyBlur() {
    // Ajoutez la classe 'blur-background' à tous les éléments de la page, sauf la popup
    Array.from(document.body.children).forEach(child => {
        if (child.id !== 'popup' && child.id !== 'blur-background') {
            child.classList.add('blur-background');
        }
    });
}

function removeBlur() {
    // Supprimez la classe 'blur-background' de tous les éléments de la page
    Array.from(document.body.children).forEach(child => {
        if (child.id !== 'popup' && child.id !== 'blur-background') {
            child.classList.remove('blur-background');
        }
    });
}


</script>

    <div id="blur-background" class="blur-background"></div>

    <script src="{{ asset('js/connexion.js') }}"></script>
@endguest