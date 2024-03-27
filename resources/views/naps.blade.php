<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/naps.css')}}">
    <title>Team Naps</title>
</head>
<body>
    <x-Navbar></x-Navbar>
    <div class="okay">
        <h1>Okay</h1>
        <audio controls>
            <source src="{{asset('audio/naps.mp3')}}" type="audio/mpeg">
            VOtre navigateur ne supporte pas l'audio
        </audio>
        <img src="{{asset('img/naps.jpg')}}" alt="okay okay">
    </div>
    <x-FooterClient></x-FooterClient>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>