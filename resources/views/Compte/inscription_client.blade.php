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
    <main>
        <h1>Création de votre compte client</h1>
        <div class="left-section">
            <div class="form-container">
                <label for="civility">Civilité:</label>
                <button id="civility">M.</button>
                <button id="civility">Mme</button>

                <label for="name">Nom:</label>
                <input type="text" id="name" name="name">

                <label for="firstname">Prénom:</label>
                <input type="text" id="firstname" name="firstname">

                <label for="username">Pseudo:</label>
                <input type="text" id="username" name="username">

                <label for="city">Ville:</label>
                <input type="text" id="city" name="city">

                <label for="country">Pays:</label>
                <input type="text" id="country" name="country">

                <label for="profile-pic">Photo de Profil:</label>
                <input type="file" id="profile-pic" name="profile-pic">
            </div>
        </div>

        <div class="divider"></div>

        <div class="right-section">
            <div class="form-container">
                <label for="address">Adresse:</label>
                <input type="text" id="address" name="address">

                <label for="postal-code">Code Postal:</label>
                <input type="text" id="postal-code" name="postal-code">

                <label for="birthdate">Date de Naissance:</label>
                <input type="date" id="birthdate" name="birthdate">

                <label for="phone">Numéro de Téléphone:</label>
                <input type="tel" id="phone" name="phone">

                <label for="email">Adresse E-mail:</label>
                <input type="email" id="email" name="email">

                <label for="password">Mot de Passe:</label>
                <input type="password" id="password" name="password">

                <label for="confirm-password">Confirmation du Mot de Passe:</label>
                <input type="password" id="confirm-password" name="confirm-password">

                <label for="iban">IBAN:</label>
                <input type="text" id="iban" name="iban">

                <button type="submit">Créer le Compte</button>
            </div>
        </div>
        <a href="{{route ('inscription_proprio')}}"> Vous souhaitez créer un compte Propriétaire</a>
    </main>
</body>
<x-FooterClient></x-FooterClient>
</html>
