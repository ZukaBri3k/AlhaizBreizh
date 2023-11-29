<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Messagerie</title>
    <link rel="stylesheet" href="{{asset('css/styleM.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <x-Navbar></x-Navbar>
    </header>
    <div class="container">
    <main>
        <section class="boutons">
            <form action="index.php" method="get" target="_blank">
                <a href="{{route ('devis')}}">
                    <button id="creerdevis" class="bouton-creer">Créer un devis</button>
                </a>
            </form>
            <h2>Votre messagerie avec BigPapoo<img class="pp" src="{{asset ('img/pp.png')}}" alt="Avatar" class="avatar" width=5% height=5%></h2>
        </section>
        <section class="messaging">
            <div class="contact-list">
                <div class="rechercher">
                    <div class="bords">
                        <p>Rechercher</p>
                    </div>
                    <div class="rechercherlogo">
                        <img src="{{asset ('img/loupe.png')}}" alt="loupe" alt="loupe" classe="loupe" width="70%" height="70%">
                    </div>
                </div>
                <div class="contact">
                    <div class="boximg"><img class="pp" src="{{asset ('img/pp.png')}}" alt="Avatar" class="avatar" width=100% height=100%></div>
                    <div class="texte"> 
                        <p>Kyrill</p>
                        <br>
                        <p5>Tu te débrouilles pour...</p5>
                    </div>
                    <div class="date">
                        <?php
                        $date = date("d");
                        $heure = date("H:i");
                        echo "<p>Le $date à $heure</p>";
                        ?>
                    </div>
                </div>
                <div class="contact">
                    <div class="boximg"><img class="pp" src="{{asset ('img/pp.png')}}" alt="Avatar" class="avatar" width=100% height=100%></div>
                    <div class="texte"> 
                        <p>BigPapoo</p>
                        <br>
                        <p5>Bonjour monsieur, ...</p5>
                    </div>
                    <div class="date">
                        <?php
                        $date = date("d");
                        $heure = date("H:i");
                        echo "<p>Le $date à $heure</p>";
                        ?>
                    </div>
                </div>
                <div class="contact">
                    <div class="boximg"><img class="pp" src="{{asset ('img/pp.png')}}" alt="Avatar" class="avatar" width=100% height=100%></div>
                    <div class="texte"> 
                        <p>Fabienne</p>
                        <br>
                        <p5>oui</p5>
                    </div>
                    <div class="date">
                        <?php
                        $date = date("d");
                        $heure = date("H:i");
                        echo "<p>Le $date à $heure</p>";
                        ?>
                    </div>
                </div>
                <div class="contact">
                    <div class="boximg"><img class="pp" src="{{asset ('img/pp.png')}}" alt="Avatar" class="avatar" width=100% height=100%></div>
                    <div class="texte"> 
                        <p>Nedelec</p>
                        <br>
                        <p5>9,5/20 pour ton DS</p5>
                    </div>
                    <div class="date">
                        <?php
                        $date = date("d");
                        $heure = date("H:i");
                        echo "<p>Le $date à $heure</p>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="message-box">
                <div class="sms-container">
                    <input type="text" class="message-input" placeholder="Saisissez ici votre message">
                    <button class="send-button"><img src="{{asset ('img/Vector.png')}}" alt="avion" width="50%" height="50%"></button>
                </div>
                <div class="dateenvoyé">
                <?php
                    $date = date("d");
                    $heure = date("H:i");
                    echo "<div class='moncercle'></div>";
                    echo "<p>Le $date à $heure</p>";
                ?>
                </div>
                <div class="message message-sent">
                    <p>Bonjour Monsieur/Madame [nom client]. 
                    <br>
                    <br>
                    Voici le devis que je vous proprose pour la réservation du
                    logement [nom logement].
                    <br>
                    <br>
                    Cordialement, [nom client].
                    Bonne journée.</p>
                    <button id="afficherPdf" class="bouton-afficher-pdf">Télécharger le devis</button>
                    <iframe id="pdfViewer" src="" style="display: none; width: 800px; height: 600px;"></iframe>
                    <button id="fermerPdf" class="bouton-afficher-pdf" style="display: none;">Fermer</button>
                </div>
                <div class="datereçu">
                <?php
                    $date = date("d");
                    $heure = date("H:i");
                    echo "<div class='moncercle2'></div>";
                    echo "<p>Le $date à $heure</p>";
                ?>
                </div>
                <div class="message message-received">
                    <p>Bonjour Monsieur/Madame [nom]. 
                    <br>
                    <br>
                    Je souhaiterais réserver le logement [nom logement]. 
                    J’aimerais savoir si c’est possible d’avoir un devis.
                    <br>
                    <br>
                    Cordialement, [nom client].
                    Bonne journée.</p>
                </div>
                <div class="dateenvoyé">
                <?php
                    $date = date("d");
                    $heure = date("H:i");
                    echo "<div class='moncercle'></div>";
                    echo "<p>Le $date à $heure</p>";
                ?>
                </div>
                <div class="message message-sent">
                    <p>BigPapoo : Bonjour, comment ça va ?</p>
                </div>
                <div class="datereçu">
                <?php
                    $date = date("d");
                    $heure = date("H:i");
                    echo "<div class='moncercle2'></div>";
                    echo "<p>Le $date à $heure</p>";
                ?>
                </div>
                <div class="message message-received">
                    <p>Test de message</p>
                </div>
                <div class="dateenvoyé">
                    <?php
                        $date = date("d");
                        $heure = date("H:i");
                        echo "<div class='moncercle'></div>";
                        echo "Le $date à $heure ";
                    ?>
                </div>
                <div class="message message-sent">
                    <p>Test de message mais ça marche ? ou ça marche ? ou ça marche pas je sais pas en vria ou en faux ? je sais pas trop en faites</p>
                </div>
            </div>
        </section>
    </main>
    </div>
    <footer>
        <x-FooterClient></x-FooterClient>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
