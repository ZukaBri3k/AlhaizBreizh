<link href="{{asset('/css/style_footer.css')}}" rel="stylesheet">
<footer>
    <hr>
    <div class="haut">
        <a href="{{route('myClientAccount')}}" id="logo_grand">
            <img src="{{asset('/img/logo_footer.png')}}">
        </a>
        <a href="{{route('myClientAccount')}}" id="logo_petit">
            <img src="{{asset('/img/logo_petit.png')}}">
        </a>
        
        <table>
            <thead>
                <th>Page</th>
                <th>Compte</th>
                <th>Qui sommes-nous ?</th>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#">Messagerie</a></td>
                    <td><a href="#">Propriétaire</a></td>
                    <td><a href="#">A propos</a></td>
                </tr>
                <tr>
                    <td><a href="#">Accueil</a></td>
                    <td><a href="#">Inscription</a></td>
                    <td><a href="#">Contact</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="#">Deconnexion</a></td>
                </tr>
            </tbody>
        </table>
        <button type="button">Profile</button>
    </div>
    <hr>
    <div class="bas">
        <p>IUT Lannion, BUT Informatique. Tous droits réservées</p>
        <img src="{{asset('/img/logo-iut.png')}}">
        <a href="#">Mentions légales</a>
    </div>
</footer>