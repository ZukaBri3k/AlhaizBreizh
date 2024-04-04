@auth
@if ($role == 1)
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style_footer.css')}}">
    <title>Responsive Footer</title>
</head>
<footer class="footer">
<hr class="footer-line">
    <div class="footer-container">
        <img src="{{asset('/img/logo_footer.png')}}" alt="IUT Logo" class="footer-logo">
        <div class="footer-column">
            <h3>Pages</h3>
            <ul>
                <li><a href="{{route('devis-client')}}">Messagerie</a></li>
                <li><a href="{{route('inscription_proprio')}}">Propriétaire</a></li>
                <li><a href="{{route('naps')}}">À propos</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Compte</h3>
            <ul>
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route ('inscription_proprio')}}">Inscription</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Qui sommes-nous ?</h3>
            <ul>
                <li><a href="{{route ('mentions_legales')}}">Mentions légales</a></li>
                <li><a href="#">Partenaires</a></li>
                <li><a href="#">Carrières</a></li>
            </ul>
        </div>
        <div class=""footer-column>
        <a href="{{route ('myClientAccount', ['id' => $id])}}">
            <button type="button">Profil</button>
        </a>
        </div>
    </div>
    <hr class="footer-line">
    <div class="footer-address">
        <p class="basgauche"><span class="underline-hover">Alhaiz Breizh</span>, tous droits réservés</p>
        <a href="{{route('cgu_cgv')}}" class="cgu_cgv">Conditions générales d'utilisations</a>
        <p class="basdroite">développé par <span class="underline-hover">Ubisoufte</span></p>
    </div>  
</footer>
@elseif ($role == 2)
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style_footer.css')}}">
    <title>Responsive Footer</title>
</head>
<footer class="footer">
<hr class="footer-line">
    <div class="footer-container">
        <img src="{{asset('/img/logo_footer.png')}}" alt="IUT Logo" class="footer-logo">
        <div class="footer-column">
            <h3>Pages</h3>
            <ul>
                <li><a href="{{route('devis-client')}}">Messagerie</a></li>
                <li><a href="{{route('inscription_client')}}">Client</a></li>
                <li><a href="{{route('naps')}}">À propos</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Compte</h3>
            <ul>
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route ('inscription_client')}}">Inscription</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Qui sommes-nous ?</h3>
            <ul>
                <li><a href="{{route ('mentions_legales')}}">Mentions légales</a></li>
                <li><a href="#">Partenaires</a></li>
                <li><a href="#">Carrières</a></li>
            </ul>
        </div>
        <div class=""footer-column>
        <a href="{{route ('myProprietaireAccount', ['id' => $id])}}">
            <button type="button">Profil</button>
        </a>
        </div>
    </div>
    <hr class="footer-line">
    <div class="footer-address">
        <p class="basgauche"><span class="underline-hover">Alhaiz Breizh</span>, tous droits réservés</p>
        <a href="{{route('cgu_cgv')}}" class="cgu_cgv">Conditions générales d'utilisations</a>
        <p class="basdroite">développé par <span class="underline-hover">Ubisoufte</span></p>
    </div>  
</footer>
@endif
@endauth
@guest
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style_footer.css')}}">
    <title>Responsive Footer</title>
</head>
<footer class="footer">
<hr class="footer-line">
    <div class="footer-container">
        <img src="{{asset('/img/logo_footer.png')}}" alt="IUT Logo" class="footer-logo">
        <div class="footer-column">
            <h3>Pages</h3>
            <ul>
                <li><a href="{{route('devis-client')}}">Messagerie</a></li>
                <li><a href="{{route('naps')}}">À propos</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Compte</h3>
            <ul>
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route ('inscription_client')}}">Inscription</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Qui sommes-nous ?</h3>
            <ul>
                <li><a href="{{route ('mentions_legales')}}">Mentions légales</a></li>
                <li><a href="#">Partenaires</a></li>
                <li><a href="#">Carrières</a></li>
            </ul>
        </div>
    </div>
    <hr class="footer-line">
    <div class="footer-address">
        <p class="basgauche"><span class="underline-hover">Alhaiz Breizh</span>, tous droits réservés</p>
        <a href="{{route('cgu_cgv')}}" class="cgu_cgv">Conditions générales d'utilisations</a>
        <p class="basdroite">développé par <span class="underline-hover">Ubisoufte</span></p>
    </div>     
</footer>
@endguest
