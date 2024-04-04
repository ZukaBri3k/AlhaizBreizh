<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Erreur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/404.css')}}" />
</head>
<body> 
    <x-Navbar></x-Navbar>

    <div class="erreur_404">
        <h1>ERREUR 404</h1>
        <p>Les informations que vous recherchez sont introuvables.</p>
        <p>Cliquez sur "retour" dans votre navigateur, ou continuez vos recherchent à l'aide du bouton ci-dessous</p>
        <a href="{{route('accueil')}}">Revenir à l'accueil</a>
    </div>

    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>