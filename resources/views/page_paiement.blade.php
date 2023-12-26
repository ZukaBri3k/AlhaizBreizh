<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <title>Paiement</title>
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
<body class="paiement">
        <x-Navbar></x-Navbar>
<h1>Procédure de paiement :</h1>
    <div>
        <section>
        <form action="https://www.caisse-epargne.fr">
            <div class="mb-3">
                <img class="image_nom" src="{{asset('img/name.png')}}">
                <li>Nom du propriétaire de la carte : </li>
                <input type="nom" class="form-control" placeholder="Ex : Jean DUPONT">
            </div>
            <div class="mb-3">
                <img src="{{asset('img/card.png')}}">
                <li>Numéro de la carte : </li>
                 <input type="nom" class="form-control" placeholder="Ex : 1234-5678-9012-3456">
             </div>
                <div class="datepicker date input-group">
                    <div class="input-group-append">
                        <li>
                            <img src="{{asset('img/calendar.png')}}">
                            Date :
                            <i class="fa fa-calendar"></i>
                        </li>
                    </div>
                    <input type="text" placeholder="Choisir une date" class="form-control" id="reservationDate">
                </div>
             <div class="mb-3">
                <img src="{{asset('img/lock.png')}}">
                <li>Code de sécurité : </li>
                 <input type="nom" class="form-control" placeholder="Ex : ">
             </div>
             <div>
                <button type="submit">Valider</button>
              </div>
        </form>
    </section>
    <span class="vertical-line"></span>
    <section>
        <form action="https://www.paypal.com/fr/home">
            <div class="mb-3">
                <li>Lien paypal</li>
                <button type="submit">Paypal</button>
             </div>
        </form>
    </section>
    </div>

    <x-FooterClient></x-FooterClient>
</body>
</html>