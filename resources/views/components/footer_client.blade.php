<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style_footer.css')}}">
    <title>Responsive Footer</title>
</head>

<body>
    <footer class="footer">
        <div class="footer-container">
            <img src="{{asset('/img/logo_footer.png')}}" alt="IUT Logo" class="footer-logo">
            <div class="footer-column">
                <h3>Pages</h3>
                <ul>
                    <li><a href="#">Messagerie</a></li>
                    <li><a href="#">Propriétaire</a></li>
                    <li><a href="#">À propos</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Compte</h3>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Inscription</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Qui sommes-nous ?</h3>
                <ul>
                    <li><a href="#">Équipe</a></li>
                    <li><a href="#">Partenaires</a></li>
                    <li><a href="#">Carrières</a></li>
                </ul>
            </div>
        </div>
        <hr class="footer-line">
        <div class="footer-address">
            <p>IUT Lannion, BUT Informatique. Tous droits réservés</p>
            <img src="{{asset('/img/logo-iut.png')}}" alt="Company Logo" class="logo">
            <p>123 Rue de l'Adresse, Ville, Pays</p>
        </div>
    </footer>
</body>
</html>