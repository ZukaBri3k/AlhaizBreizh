<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_profile_prive.css')}}" />
    <title>Son profile privée</title>
</head>
<body>
    <x-Navbar></x-Navbar>

    <div class="Titre">
        <h1>Information de votre compte client</h1>
        <a href="{{ route('modifierClient') }}">
            <button class="button_modif">Modifier</button>
        </a>
    </div>
    <div class="Profile_Public">
        <h5>Profil public</h5>
        <hr>
        <div class="Donnees">
            <div class="pp">
                <p>Photo de profil</p>
                @if($personnes->photo_pers == "pp_profile.png")
                    <img src="{{ asset('img/pp_profile.png' )}}">
                @else
                    <img src="{{ asset('pp/pp' . $personnes->id . '/' . $personnes->photo_pers )}}">
                @endif
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

    <div class="Profile_Privee sectionIcal" id="encreIcal">
        <h5>Suivre vos réservations en direct</h5>
        <hr>
        <p class="line_info">Vous souhaitez exporter vos réservations / demande de réservation sur un agenda ?</p>
        <p class="line_info">Choisissez vos événements à suivre :</p>
        
        <form action="{{route('createIcal')}}" method="get" class="ical">
            @csrf
            <div class="line underline">
                <label for="reservation">Réservations </label>
                <input type="checkbox" name="reservation" id="reservation">
            </div>
            <div class="line underline">
                <label for="demande_reservation">Demande de réservation </label>
                <input type="checkbox" name="demande_reservation" id="demande_reservation">
            </div>
            <div class="line">
                <label for="date_deb">Du </label>
                <input type="date" name="date_deb" id="date_deb">
                <label for="date_fin">Au </label>
                <input type="date" name="date_fin" id="date_fin">
            </div>
            
            <button type="submit">Exporter</button>
        </form>
        <h5>Liste de vos liens générés</h5>
        <hr>
        @php
                    $ical = DB::table('ical')->where('id_personne', Auth::user()->id)->get();
        @endphp
        
        @if(count($ical) > 0)
            <table>
                <thead>
                    <tr>
                        <td>Réservation</td>
                        <td>Devis</td>
                        <td>Date début</td>
                        <td>Date fin</td>
                        <td>Lien</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($ical as $i)
                        <tr>
                            <td>{{ $i->reserv_suivi ? '✅' : '❌' }}</td>
                            <td>{{ $i->devis_suivi ? '✅' : '❌' }}</td>
                            <td>{{ $i->date_deb }}</td>
                            <td>{{ $i->date_fin }}</td>
                            <td><button onclick="copierTexte(event, '{{"http://site-sae-ubisoufte.bigpapoo.com/getIcal/" . $i->token}}')" >Copier</button></td>
                            <td><a href="{{route('delIcal', ['token' => $i->token])}}">Supprimer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="icalErreur">Aucun lien généré</p>
        @endif
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

    <div class="Profile_Privee">
        <h5>Clôturer votre compte</h5>
        <hr>
        <div class="Donnees">
            <p class="phrase">Clôturer votre compte supprimera l'accès à toutes vos réservation passer, et annulera vos réservation en cours.</p>
            <a href="{{ route('deleteClient') }}" id="cloturer">
                <button class="button_clotu">Clôturer</button>
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