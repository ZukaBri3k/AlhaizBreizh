<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/css/countrySelect.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/inscription.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/js/countrySelect.min.js"></script>
    <x-Navbar></x-Navbar>
    <main class="container">
        <h1 class="text-center">Modification de votre compte client</h1>
        <form action="{{route('modificationsClient')}}" method="post">
        @csrf
        <div class="row lapage">
            <div class="col-md-6">
                <h2>Informations Personnelles publiques</h2>
                <div class="form-container">
                    <label for="civilite_pers">Civilité:</label>
                    <select id="civilite_pers" name="civilite_pers" class="form-control">
                        @if($personnes->civilite_pers == "M.")
                            <option value="M." selected>M.</option>
                            <option value="MME.">MME.</option>
                        @elseif($personnes->civilite_pers == "MME.")
                            <option value="M.">M.</option>
                            <option value="MME." selected>MME.</option>
                        @endif
                </select>
                    <script>
                        function showOptions() {
                            var select = document.getElementById('civilite_pers');
                            select.innerHTML = ''; // Efface l'option civilité

                            // Ajoute les options
                            var options = ['none', 'M.', 'MME.'];
                            options.forEach(function (option) {
                                var optionElement = document.createElement('option');
                                optionElement.value = option;
                                optionElement.text = option;
                                select.add(optionElement);
                            });
                        }
                    </script>

                    <label for="nom_pers">*Nom:</label>
                    <input type="text" id="nom_pers" name="nom_pers" placeholder="Entrez votre nom" class="form-control" value="{!! $personnes->nom_pers !!}" pattern="[A-Za-z\-'\s]+" 
                        maxlength="20" required>

                    <label for="prenom_pers">*Prénom:</label>
                    <input type="text" id="prenom_pers" name="prenom_pers" placeholder="Entrez votre prénom" class="form-control" value="{!! $personnes->prenom_pers !!}" pattern="[A-Za-z\-'\s]+" 
                        maxlength="30" required>

                    <label for="pseudo_pers">*Pseudo:</label>
                    <input type="text" id="pseudo_pers" name="pseudo_pers" placeholder="Choisissez un pseudo"
                        class="form-control" value="{!! $personnes->pseudo_pers !!}" maxlength="15" required>

                    <label for="ville_pers">*Ville:</label>
                    <input type="text" id="ville_pers" name="ville_pers" placeholder="Entrez votre ville" class="form-control" value="{!! $personnes->ville_pers !!}" 
                        maxlength="60" required>

                    <label for="pays_pers">*Pays:</label>
                    <input type="text" id="pays_pers" name="pays_pers" placeholder="Entrez votre pays" value="{!! $personnes->pays_pers !!}" class="form-control" required>
                    <script>
                        jQuery(document).ready(function() {
                            jQuery("#pays_pers").countrySelect();
                        });
                    </script>

                    <label for="profile-pic">
                        Insérer une photo de profil :
                        <span class="upload-icon"><img src="{{asset('/img/Download.png')}}"></span>
                    </label>
                    <input type="file" id="profile-pic" name="profile-pic" style="display: none;">
                    <div id="profile-pic-message"></div>
                    <div id="profile-pic-preview"></div>
                    <script>
                        document.getElementById('profile-pic').addEventListener('change', function () {
                            var fileInput = this;
                            var file = fileInput.files[0];

                            if (file) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    var previewElement = document.getElementById('profile-pic-preview');
                                    previewElement.innerHTML = '<img src="' + e.target.result + '" alt="Profile Preview" style="max-width: 100%;">';

                                    var fileName = fileInput.value.split('\\').pop();
                                    var message = "Photo de profil enregistrée : " + fileName;

                                    document.getElementById('profile-pic-message').innerText = message;
                                };

                                reader.readAsDataURL(file);
                            }
                        });
                    </script>
                </div>
            </div>

            <div class="col-md-6 divider">
                <h2 class="h2">Informations Personnelles privées</h2>
                <div class="form-container">
                    <label for="adresse_pers">*Adresse:</label>
                    <input type="text" id="adresse_pers" name="adresse_pers" placeholder="Entrez votre adresse"
                        class="form-control" value="{!! $personnes->adresse_pers !!}" maxlength="60" required>

                    <label for="code_postal_pers">*Code Postal:</label>
                    <input type="text" id="code_postal_pers" name="code_postal_pers" placeholder="Entrez votre code postal"
                        class="form-control" value="{!! $personnes->code_postal_pers !!}" maxlength="5" pattern="^\d{5}$" required>

                    <label for="date_de_naissance">*Date de Naissance:</label>
                    <input type="date" id="date_de_naissance" name="date_de_naissance" placeholder="Entrez votre date de naissance"
                        class="form-control" value="{!! $personnes->date_de_naissance !!}" required>

                    @php
                        $telephone = $personnes->telephone_pers;
                        $telephone = preg_replace('/^\+\d{2}/', '0', $telephone);
                    @endphp
                    <label for="telephone_pers">*Numéro de Téléphone:</label>
                    <input type="tel" id="telephone_pers" name="telephone_pers" placeholder="Entrez votre numéro de téléphone"
                        class="form-control" value="{!! $telephone !!}" maxlength="12" pattern="^\d{10}$" required>
                        

                    <label for="mail_pers">*Adresse E-mail:</label>
                    <input type="email" id="mail_pers" name="mail_pers" placeholder="Entrez votre adresse E-mail"
                        class="form-control" value="{!! $personnes->mail_pers !!}" maxlength="80" required>

                    <label for="password">*Mot de Passe:</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"
                        class="form-control" maxlength="60" required>

                    <label for="confirmerMotDePasse">*Confirmation du Mot de Passe:</label>
                    <input type="password" id="confirmerMotDePasse" name="confirmerMotDePasse"
                        placeholder="Confirmez votre mot de passe" class="form-control" maxlength="60" required>

                    <label for="iban">IBAN:</label>
                    <input type="text" id="iban" name="iban" placeholder="Entrez votre IBAN" class="form-control" value="{!! $personnes->iban !!}">
                </div>
            </div>
        </div>
        <button type="submit" class="create-account-btn create-account-button btn btn-primary">Confirmer la modification</button>
        <br>
    </main>
    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
