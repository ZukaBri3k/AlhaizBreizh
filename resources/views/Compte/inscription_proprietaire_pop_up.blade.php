<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/pop_up_inscri.css')}}">
</head>
<body>
    <div id="blur-background" class="blur-background">

    </div>
    <button id="open-popup">+</button>
<div id="popup-container">
<div class="popup">
    <span id="close-popup" class="close-btn">&times;</span>
    <div class="left">
        <h3>Inscrivez vous, en tant que Propriétaire :</h3>
        <h4><a href="{{route ('inscription_client_pop')}}"> Je souhaite créer un compte client</a>
           </h4>

    <form action = "{{route ('inscription_proprio')}}">
    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br><br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br><br>

    <label for="email">E-mail :</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <input type="submit" value="S'inscrire">
</form>
</div>
<div class="right"></div>
</div>
</div>
<script src="{{asset('js/pop_up_inscrip.js')}}"></script>
</body>
</html>


