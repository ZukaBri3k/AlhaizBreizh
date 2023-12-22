<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_profile_prive.css')}}" />
    <title>Son profile privée</title>
</head>
<body>
    <x-Navbar></x-Navbar>

    <h6>Demande de devis : </h6>
    <a href="{{route('devis-client')}}">Demander le devis</a>

    <div class="Titre">
        <h1>Information de votre compte client</h1>
        <button>Modifier</button>
    </div>
    <div class="Profile_Public">
        <h5>Profil public</h5>
        <hr>
        <div class="Donnees">
            <div class="pp">
                <p>Photo de profil</p>
                <img src="{{asset('img/pp_profile.png')}}">
            </div>
            <div class="donnees_precise">
                <div class="elem">
                    <p>Nom d'utilisateur :</p>
                    <p>BigPapoo</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Nom :</p>
                    <p>Quiniou</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Prenom :</p>
                    <p>Gildas</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Ville :</p>
                    <p>Lannion</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Pays :</p>
                    <p>France</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Civilité :</p>
                    <p>Français</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Genre :</p>
                    <p>Homme</p>
                </div>
            </div>
        </div>
    </div>



    <div class="Profile_Privee">
        <h5>Profil privée</h5>
        <hr>
        <p class="line_info">Vos informations privées ne sont <strong>pas visibles des autres utilisateurs.</strong></p>
        <div class="Donnees">
            <div class="donnees_precise">
                <div class="elem">
                    <p>Adresse :</p>
                    <p>3 rue Edouard Branly</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Code Postal :</p>
                    <p>22300</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Âge :</p>
                    <p>50 ans</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Numéro de téléphone :</p>
                    <p>06 01 01 01 01</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Email :</p>
                    <p>example@email.com</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Date de naissance :</p>
                    <p>24 Janvier 2004</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Mot de passe :</p>
                    <p>**********</p>
                </div>
                <hr>
                <div class="elem">
                    <p>IBAN :</p>
                    <p>**********</p>
                </div>
            </div>
        </div>
    </div>

    <div class="Profile_Privee">
        <h5>Clé API</h5>
        <hr>
        <p class="line_info">Cette clé ne doit pas être partagée <strong>et être gardée privée.</strong></p>
        <div class="Donnees">
            <div class="donnees_precise">
                <div class="elem">
                    <p>Clé :</p>
                    <p>123456789</p>
                    <button class="button_api">Supprimer sa clé</button>
                </div>
                <hr>
                <div class="elem">
                    <p>Clé privilégier :</p>
                    <p>123456789</p>
                    <button class="button_api">Supprimer sa clé</button>
                </div>
                <hr>
            </div>
            <form action="" method="get" class="api">
                <h3>Générer sa clé :</h3>
                <div class="elem">
                    <div class="radio_form">
                        <div>
                            <input type="radio" id="prive" name="cle" value="prive" checked>
                            <label for="prive">Privilégiée</label>
                        </div>
                        <div>
                            <input type="radio" id="nonprive" name="cle" value="nonprive">
                            <label for="nonprive">Non privilégiée</label>
                        </div>
                    </div>
                </div>
                <button class="button_form" type="submit">+ Créer sa nouvelle clé secrète</button>
            </form>
        </div>
    </div>

    <div class="Profile_Privee">
        <h5>Déconnexion</h5>
        <hr>
        <div class="Donnees">
            <a href="{{ route('logout') }}">
                <button class="button_api">Déconnexion</button>
            </a>
        </div>
    </div>

    <x-FooterClient></x-FooterClient>
</body>
</html>