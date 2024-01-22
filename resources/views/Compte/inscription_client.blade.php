<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/inscription.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <x-Navbar></x-Navbar>
    <main class="container">
        <h1 class="text-center">Création de votre compte client</h1>
        <div class="row lapage">
            <div class="col-md-6">
                <h2>Informations Personnelles publiques</h2>
                <div class="form-container">
                    <label for="civilite_pers">Civilité:</label>
                    <select id="civilite_pers" name="civilite_pers" class="form-control">
                    <option selected disabled hidden>civilite</option>
                    <option value="none">none</option>
                    <option value="M.">M.</option>
                    <option value="MME.">MME.</option>
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

                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom" class="form-control">

                    <label for="firstname">Prénom:</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Entrez votre prénom"
                        class="form-control">

                    <label for="username">Pseudo:</label>
                    <input type="text" id="username" name="username" placeholder="Choisissez un pseudo"
                        class="form-control">

                    <label for="city">Ville:</label>
                    <input type="text" id="city" name="city" placeholder="Entrez votre ville" class="form-control">

                    <label for="country">Pays:</label>
                    <input type="text" id="country" name="country" placeholder="Entrez votre pays"
                        class="form-control">

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
                    <label for="address">Adresse:</label>
                    <input type="text" id="address" name="address" placeholder="Entrez votre adresse"
                        class="form-control">

                    <label for="postal-code">Code Postal:</label>
                    <input type="text" id="postal-code" name="postal-code" placeholder="Entrez votre code postal"
                        class="form-control">

                    <label for="birthdate">Date de Naissance:</label>
                    <input type="date" id="birthdate" name="birthdate" placeholder="Entrez votre date de naissance"
                        class="form-control">

                    <label for="phone">Numéro de Téléphone:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone"
                        class="form-control">

                    <label for="email">Adresse E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre adresse E-mail"
                        class="form-control">

                    <label for="password">Mot de Passe:</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"
                        class="form-control">

                    <label for="confirm-password">Confirmation du Mot de Passe:</label>
                    <input type="password" id="confirm-password" name="confirm-password"
                        placeholder="Confirmez votre mot de passe" class="form-control">

                    <label for="iban">IBAN:</label>
                    <input type="text" id="iban" name="iban" placeholder="Entrez votre IBAN" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="create-account-btn create-account-button btn btn-primary">Créer le Compte</button>
        <br>
        <a href="{{route ('inscription_proprio')}}"> Vous souhaitez créer un compte Propriétaire</a>
    </main>
</body>
<x-FooterClient></x-FooterClient>
</html>
