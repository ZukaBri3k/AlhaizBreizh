<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="{{asset('css/styleCO.css')}}">
    <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="container py-5 h-100 center-popup">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="img/grandlogo.png"
                          style="width: 185px;" alt="logo">
                      </div>
                      <form action="{{ route('authenticate') }}" method="post">    
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeCompte" id="radiobtn" value="client" checked>
                          <label class="form-check-label" for="typeCompte">Client</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="typeCompte" id="radiobtn" value="proprietaire">
                          <label class="form-check-label" for="typeCompte">Propriétaire</label>
                        </div>  
                        <div class="form-outline mb-4">
                          <label class="form-label" for="mail_pers">email</label>
                          <input type="email" name="mail_pers" id="email" class="form-control" placeholder="adresse mail" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form2Example22">mot de passe</label>
                          <input type="password" name="mdp_pers" id="mdp" class="form-control" />
                          <a class="text-muted" href="#!">mot de passe oublié ?</a>
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg mb-3" type="button" disabled>Connexion</button>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">pas de compte ?</p>
                          <button type="button" class="btn btn-outline-danger">Créer un compte</button>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center fondfou">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
<script src="{{ asset('js/connexion.js') }}"></script>
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

  var images = ['img/tresbeau.png', 'img/beau.jpg']; // Remplacez par vos images
  var index = 0;

  function changeBackground() {
    document.querySelector('.fondfou').style.backgroundImage = 'url(' + images[index] + ')';
    index = (index + 1) % images.length;
}

setInterval(changeBackground, 3000); // Change toutes les 3 secondes
</script>
</html>
