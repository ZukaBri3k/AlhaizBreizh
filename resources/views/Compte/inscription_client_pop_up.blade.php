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
                <h3>Inscrivez vous, en tant que client :</h3>
                <h4><a href="{{route ('inscription_proprio_pop')}}"> Je souhaite créer un compte Propriétaire</a>
                   </h4>

            <form action="{{route ('inscription_client')}}">
            <label for="prenom_pers">Prenom :</label>
            <input type="text" id="prenom_pers" name="prenom_pers" required>
            <br><br>

            <label for="nom_pers">Nom :</label>
            <input type="text" id="nom_pers" name="nom_pers" required>
            <br><br>

            <label for="mail_pers">E-mail :</label>
            <input type="email" id="mail_pers" name="mail_pers" required>
            <br><br>

            <input type="submit" value="S'inscrire">
        </form>
    </div>
    <div class="right"></div>
</div>
</div>

<script src="{{asset ('js/pop_up_inscrip.js')}}"></script>
        </body>
        </html>
        
        
        
        