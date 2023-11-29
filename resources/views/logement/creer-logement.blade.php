<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8" />
<title>Créer mon logement</title>
<meta name="créer logement" content=""/>
<meta name="keywords" content="AlHaizBreizh"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/IMG/logo.png">
<link rel="stylesheet" href="./assets/CSS/style_logement.css">
<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="./assets/JS/script_logement.js"></script>
</head>


<body>
    <header>
        <div>
            <img class="img_header1" src="./assets/IMG/header_logo.png">
            <img class="img_header2" src="./assets/IMG/profil.png">
        </div>    
        <hr>
    </header>
<main>
<section class="part1">
<form action="creer-logement-p1.php" method="POST">
    <div>    
        <section class="p1">
            <div class='p1-1'>
                <div class="abc">
                    <div class='p1-1-nom'><h3>De quelle nature est votre logement ? </h3><p title="obligatoire">* Veuillez selectionner une nature de logement</p></div>
                    <div>
                        <button id="btn1" name="maison" type="button"><img src="./assets/IMG/maison.svg"><p>Maison</p></button>
                        <button id="btn2" name="appartement" type="button"><img class="appart" src="./assets/IMG/appartement.svg"><p>Appartement</p></button>
                    </div>
                    <div>
                        <button id="btn3" name="villa" type="button"><img src="./assets/IMG/villa.png"><p>Villa d'exception</p></button>
                        <button id="btn4" name="bateau" type="button"><img src="./assets/IMG/bateau.png"><p>Bateau</p></button>
                    </div> 
                    <div>
                        <button id="btn5" name="chambre_hote" type="button"><img src="./assets/IMG/hotel.svg"><p>Chambre d'hôtes</p></button>
                        <button id="btn6" name="maison_hote" type="button"><img src="./assets/IMG/maison_2.svg"><p>Maison d'hôtes</p></button>
                    </div>     
                    <div>
                        <button id="btn7" name="cabane" type="button"><img src="./assets/IMG/cabane.svg"><p>Cabane</p></button>
                        <button id="btn8" name="caravane" type="button"><img src="./assets/IMG/caravane.svg"><p>Caravane ou Camping-car</p></button>
                    </div>         
                 <input type="hidden" id="nature_logement" name="nature_logement" />

                </div>
            </div>
        </section>
        <section class="p2">
            <div class='p2-2'>
                <div class="abc">
                    <div class='p2-2-nom'><h3>De quel type est votre logement ?</h3><p title="obligatoire">* Veuillez sélectionner un  type de logement (pour en savoir plus, <a href="">cliquez ici</a>)</p></div>
                    <div>
                        <button id="btn9" name="T1" type="button"><img src="./assets/IMG/t1.svg"><p>T1</p></button>
                        <button id="btn10" name="T2" type="button"><img src="./assets/IMG/t2.svg"><p>T2</p></button>
                    </div>
                    <div>
                        <button id="btn11" name="T3" type="button"><img src="./assets/IMG/t3.svg"><p>T3</p></button>
                        <button id="btn12" name="T4" type="button"><img src="./assets/IMG/t4.png"><p>T4</p></button>
                    </div>
                    <div>
                        <button id="btn13" name="studio" type="button"><img src="./assets/IMG/studio.png"><p>Studio</p></button>
                        <button id="btn14" name="duplex" type="button"><img src="./assets/IMG/duplex.png"><p>Duplex</p></button>
                    </div>
                    <div>
                        <button id="btn15" name="triplex" type="button"><img src="./assets/IMG/triplex.svg"><p>Triplex</p></button>
                    </div>
                </div>
                <input type="hidden" id="type_logement" name="type_logement" />
            </div>
        </section>
    </div>
    <div class="bottom_window">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>   
        <div class="bouton_bottom">     
            <button name="btn_retour" onclick="retour()" class="validation">RETOUR</button>
            <script>
                function retour(){
                    window.location.href = 'index.php';
                }
            </script>
            <button name="btn_validation" class="validation" type="submit">SUIVANT</button>
        </div>    
    </div>    
    </form>
</section> 
</main>
</body>
</html>