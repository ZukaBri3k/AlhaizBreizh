<?php
/*
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accept') {
        // Le client a accepté le devis, vous pouvez traiter cette action ici.
        // Par exemple, enregistrer la réponse dans une base de données.
        $message = "Le client a accepté le devis.";
    } elseif ($_GET['action'] == 'refuse') {
        // Le client a refusé le devis, vous pouvez également traiter cette action.
        // Par exemple, enregistrer la réponse dans une base de données.
        $message = "Le client a refusé le devis.";
    }
}
*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Messagerie</title>
    <link rel="stylesheet" href="{{asset('css/styleM.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container">
    <header>
    <x-Navbar></x-Navbar>
    </header>
    <main>
        <section class="boutons">
            <form action="{{route('devis-page')}}" method="get" target="_blank">
                <button class="bouton-creer">Créer un devis</button>
            </form>
            <h2>Votre messagerie avec BigPapoo<img src="img/pp.png" alt="Avatar" class="avatar" width=5% height=5%></h2>
        </section>
        <section class="messaging">
            <div class="contact-list">
                <bouton class="rechercher">Rechercher</bouton>
                <div class="contact">
                    <p>Kyrill</p>
                </div>
                <div class="contact">
                    <p>BigPapoo</p>
                </div>
                <div class="contact">
                    <p>Fabienne</p>
                </div>
                <div class="contact">
                    <p>Nedelec</p>
                </div>
            </div>
            <div class="message-box">
                <div class="message message-received">
                    <p>BigPapoo : Bonjour, comment ça va ?</p>
                </div>
                <div class="message message-sent">
                    <p>Moi : Bonjour, ça va bien et toi ?</p>
                </div>
                <div class="message message-received">
                    <p>BigPapoo : Je vais bien, merci !</p>
                </div>
                <p><?php /*echo isset($message) ? $message : ''; ?></p>
                <?php
                if (isset($_GET['refus']) && $_GET['refus'] == 1) {
                    echo "Le client a refusé le devis.";
                }
                ?>
                <?php
                if (isset($_GET['accept']) && $_GET['accept'] == 1) {
                    echo "Le client a accepté le devis.";
                }
                */
                ?>
            </div>
        </section>
    </main>
    </div>
    <footer>
        <p>Place du footer</p>
    </footer>
</body>
</html>