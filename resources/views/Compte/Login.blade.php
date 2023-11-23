<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type='text/css' href="{{asset('css/connexion.css')}}">
    <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

    <button id="connexionButton">Connexion</button>

    <div id="popup" class="popup">
        
        <div class="popup-content">
            <span class="close" id="closeButton">&times;</span>
            <h1>Connexion</h1>
            <a href="{{route ('inscription_client_pop')}}">Pas de compte ? Inscrivez-vous en client ici !
            </a>
    
            <form action="{{ route('authenticate') }}" method="post">
                @csrf
                <div id="radios">
                    
                    <div id="radio_btn_placement_client">
                    
                        <input type="radio" id="radiobtn" name="radiobtn" value="client" class="radios"/>
                        <label for="radiobtn" id="label_radio">Client</label>
                    
                    </div>

                    <div id="radio_btn_placement_proprio">

                        <input type="radio" id="radiobtn" name="radiobtn" value="proprietaire" class="radios" />
                        <label for="radiobtn">Propriétaire</label>    

                    </div>
           
                </div>

                <label for="email">Adresse mail</label>
                <input type="mail" name="email" id="email" placeholder="exemplemail@mail.exemple" required="">
                <label for="mdp" id="decal">Mot de Passe</label>
                <div class="password-container">
                    <input type="password" name="mdp" id="mdp" required>
                    <i class="far fa-eye" id="togglePassword"></i>
                </div>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach 
                
                <a href="#">Mot de passe oublié</a>
            </form>
            
            <button id="connexion" type="submit">Connexion</button>
        </div>
       

    </div>

    <div id="blur-background" class="blur-background"></div>

    <script src="{{ asset('js/connexion.js') }}"></script>
</body>
</html>
