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
                    <p>{!! $personnes->pseudo_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Nom :</p>
                    <p>{!! $personnes-> nom_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Prenom :</p>
                    <p>{!! $personnes->prenom_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Ville :</p>
                    <p>{!! $personnes->ville_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Pays :</p>
                    <p>{!! $personnes->pays_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Civilité :</p>
                    <p>{!! $personnes->civilite_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Genre :</p>
                    <p>{!! $personnes->genre_pers !!}</p>
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
                    <p>{!! $personnes->adresse_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Code Postal :</p>
                    <p>{!! $personnes->code_postal_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Âge :</p>
                    <p>{!! $personnes->age_pers !!} ans</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Numéro de téléphone :</p>
                    <p>{!! $personnes->telephone_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Email :</p>
                    <p>{!! $personnes->mail_pers !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Date de naissance :</p>
                    @php
                        $date = $personnes->date_de_naissance;
                        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                        $formattedDate = $formatter->format(new DateTime($date));
                    @endphp
                    <p>{!! $formattedDate !!}</p>
                </div>
                <hr>
                <div class="elem">
                    <p>Mot de passe :</p>
                    <p>**********</p>
                </div>
                <hr>
                <div class="elem">
                    <p>IBAN :</p>
                    @php
                        $iban = $personnes->iban;
                        $iban = str_repeat("*", strlen($iban));
                    @endphp
                    <p>{!! $iban !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="Profile_Privee", id="api_chemin">
        <h5>Clé API</h5>
        <hr>
        <p class="line_info">Cette clé ne doit pas être partagée <strong>et être gardée privée.</strong></p>
        <div class="Donnees">
            <div class="donnees_precise">
                @php
                    foreach ($cles as $cle) {
                        if ($cle->privilege == false) {
                            $url = route('deleteClePro', ['cle' => $cle->cle]);
                            echo "<div class='elem'>
                                    <p>Clé :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p>" . $cle->cle . "</p>
                                    <a href='$url', class='a_api'><button class='button_api'>Supprimer sa clé</button></a>
                                </div>
                                <hr>";
                        } else {
                            $url = route('deleteClePro', ['cle' => $cle->cle]);
                            echo "<div class='elem'>
                                    <p>Clé privilégiée :</p>
                                    <p>" . $cle->cle . "</p>
                                    <a href='$url', class='a_api'><button class='button_api'>Supprimer sa clé</button></a>
                                </div>
                                <hr>";
                        }
                    }
                @endphp
            </div>
            <form action="{{route('genereClePro')}} " method="post" class="api">
                @csrf
                <h3>Générer sa clé :</h3>
                <div class="elem">
                    <div class="radio_form">
                        <div>
                            <input type="radio" id="prive" name="privilege" value="prive" checked>
                            <label for="prive">Privilégiée</label>
                        </div>
                        <div>
                            <input type="radio" id="nonprive" name="privilege" value="nonprive">
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
                <button class="button_deco">Déconnexion</button>
            </a>
        </div>
    </div>

    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>