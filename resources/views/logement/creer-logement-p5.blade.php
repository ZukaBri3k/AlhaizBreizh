
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
<form action="creer-logement-p6.php" method="POST">
    <div>    
        <section class="p1">
            <div class='p1-5'>
                <div class="abc">
                    <div class='p1-5-nom'><h3>De quelles installations dispose votre logement ?</h3><p title="obligatoire">* Veuillez selectionner au moins une installation de logement</p></div>
                    <div>
                        <div>
                            <button id="btn34" name="jacuzzi" onclick="toggleButton2(this)" type="button"><img src="./assets/IMG/jacuzzi.svg"><p>Jacuzzi</p></button>
                            <button id="btn35" name="sauna" onclick="toggleButton2(this)" type="button"><img src="./assets/IMG/sauna.svg"><p>Sauna</p></button>
                        </div>
                        <div>
                            <button id="btn36" name="piscine" onclick="toggleButton2(this)" type="button"><img src="./assets/IMG/piscine.svg"><p>Piscine</p></button>
                            <button id="btn37" name="climatisation" onclick="toggleButton2(this)" type="button"><img src="./assets/IMG/climatisation.svg"><p>Climatisation</p></button>
                        </div>
                        <div class="boutonbas">
                            <button id="btn38" name="hammam" onclick="toggleButton2(this)" type="button"><img src="./assets/IMG/hammam.png"><p>Hammam</p></button>
                            <button id="btn39" name="espace travail" onclick="toggleButton2(this)" type="button"><img style="width: 30%" src="./assets/IMG/espace_travail.svg"><p>Espace de travail</p></button>
                        </div>
                    </div>
                </div>   
            </div> 
        </section>
        <section class="p2">
            <div class='p2-5'>
                <div class="abc">
                    <div class='p2-5-nom'><h3>De quels services dispose votre logement ?</h3><p title="obligatoire">* Veuillez sélectionner au moins un service de logement</p></div>
                    <div>    
                        <div>
                            <button id="btn40" name="menage" onclick="toggleButton5(this)" type="button"><img src="./assets/IMG/menage2.svg"><p>Ménage</p></button>
                            <button id="btn41" name="linge" onclick="toggleButton5(this)" type="button"><img src="./assets/IMG/linge.svg"><p>Linge</p></button>
                        </div>
                        <div>
                            <button id="btn42" name="taxi" onclick="toggleButton5(this)" type="button"><img src="./assets/IMG/taxi.svg"><p>Taxi</p></button>
                            <button id="btn43" name="ustensiles cuisine" onclick="toggleButton5(this)" type="button"><img src="./assets/IMG/ustensile.svg"><p>Ustensiles de cuisine</p></button>
                        </div>
                        <div>
                            <button id="btn44" name="velo" onclick="toggleButton5(this)" type="button"><img src="./assets/IMG/velo.svg"><p>Vélo</p></button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="services" name="services" />
            </div>
        </section>
    </div>        
    <div class="bottom_window">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>   
        <div class="bouton_bottom">     
            <button name="btn_retour" type="button" onclick="retour()" class="validation">RETOUR</button>
            <script>
                function retour(){
                    window.history.back();s
                }
            </script>            <button name="btn_validation"  class="validation" type="submit">SUIVANT</button>
        </div>    
    </div>    
    </form>
</section> 
</main>
<script src="./assets/JS/script_logement_p5.js"></script>
</body>
</html>