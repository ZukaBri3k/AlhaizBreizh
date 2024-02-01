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

    <div class="Titre">
        <h1>Information de votre compte client</h1>
        <button style="display: none">Modifier</button>
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

    <!-- Code html et php pour générer sa clé API -->
    <div class="Profile_Privee", id="api_chemin">
        <h5>Clé API</h5>
        <hr>
        <p class="line_info">Cette clé ne doit pas être partagée <strong>et être gardée privée.</strong></p>
        <div class="Donnees">
            <div class="donnees_precise">
                <!-- Code php qui génère une clé API -->
                @php
                    foreach ($cles as $cle) {
                        //Ici j'échappe certains caractère pour que ça passe dans le JS pour copier dans le clipboard
                        $cleEscaped = htmlspecialchars($cle->cle, ENT_QUOTES);

                        //Ici je réduis la clé API pour qu'elle passe dans l'affchage
                        $cleShort = strlen($cle->cle) > 6 ? substr($cle->cle, 0, 6) . '...' : $cle->cle;

                        //Ici je prend la route et je passe la route avec l'argument de la clé a supprimer
                        $url = route('deleteCle') . '?cle=' . urlencode($cle->cle);

                        if ($cle->privilege == false) {
                            echo "<div class='elem'>
                                    <p>Clé :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    <p>" . $cleShort . "</p>
                                    <button onclick='copierTexte(event, \"$cleEscaped\")' class='button_copie'>Copier</button>
                                    <a href='$url' class='delete-link' class='a_api'><button class='button_api'>Supprimer sa clé</button></a>
                                </div>
                                <hr>";
                        }
                    }
                @endphp
            </div>
            <form action="{{route('genereCle')}} " method="post" class="api">
                @csrf
                <h3>Générer sa clé :</h3>
                <button class="button_form" type="submit">+ Créer sa nouvelle clé secrète</button>
            </form>
        </div>
    </div>

    <div class="Profile_Privee">
        <h5>Déconnexion</h5>
        <hr>
        <div class="Donnees">
            <a href="{{ route('logout') }}" id="logout">
                <button class="button_deco">Déconnexion</button>
            </a>
        </div>
    </div>

    <x-FooterClient></x-FooterClient>
    <script src="{{asset('js/script_compte_api.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>