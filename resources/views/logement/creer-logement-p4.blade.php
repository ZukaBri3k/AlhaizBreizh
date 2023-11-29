
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
<form action="creer-logement-p5.php" method="POST">
    <div>    
        <section class="p1">
            <div class='p1-4'>
                <div class="abc">
                    <div class='p1-4-nom'><h3>De quels aménagements dispose votre logement ?</h3><p title="obligatoire">Veuillez selectionner au moins un aménagement de logement</p></div>
                    <div>
                        <div>
                            <button style="margin-right:30px" id="btn16" name="terrasse" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/terrasse.svg"><p>Terrasse</p></button>
                            <button style="margin-right:30px" id="btn17" name="jardin" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/jardin.svg"><p>Jardin</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn18" name="balcon" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/balcon.svg"><p>Balcon</p></button>
                            <button style="margin-right:30px" id="btn19" name="parking prive" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/parking_p.svg"><p>Parking privé</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn20" name="parking public" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/parking.svg"><p>Parking public</p></button>
                            <button style="margin-right:30px" id="btn21" name="patio" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/patio.svg"><p>Patio</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn22" name="salon hiver" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/salon_h.svg"><p>Salon d'hiver</p></button>
                            <button style="margin-right:30px" id="btn23" name="veranda" onclick="toggleButton(this)" type="button"><img src="./assets/IMG/veranda.svg"><p>Véranda</p></button>
                        </div>
                   </div>
                   <input type="hidden" id="amenagement_logement" name="amenagement_logement" required/>
                </div>
            </div>
        </section>
        <section class="p2">
            <div class='p2-4'>
                <div class="abc">
                    <div class='p2-4-nom'><h3>De quels équipements dispose votre logement ?</h3><p title="obligatoire">Veuillez sélectionner au moins un équipement de logement</p></div>
                    <div>
                        <div>
                            <button style="margin-right:30px" id="btn24" name="wifi" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/wifi.svg"><p>Wifi</p></button>
                            <button style="margin-right:30px" id="btn25" name="tv" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/tv.svg"><p>Télévision</p></button>
                            <button style="margin-right:30px" id="btn26" name="cuisine" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/cuisine.svg"><p>Cuisine</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn27" name="lave-linge" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/lave_linge.svg"><p>Lave-linge</p></button>
                            <button style="margin-right:30px" id="btn28" name="lave-vaisselle" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/lave_vaisselle.svg"><p>Lave-vaisselle</p></button>
                            <button style="margin-right:30px" id="btn29" name="instrument" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/instru.svg"><p>Instrument</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn30" name="appareil_sport" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/sport.svg"><p>Appareils de sport</p></button>
                            <button style="margin-right:30px" id="btn31" name="cheminee" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/cheminee.svg"><p>Cheminée</p></button>
                            <button style="margin-right:30px" id="btn32" name="barbecue" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/barbecue.svg"><p>Barbecue</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn33" name="equip_pmr" onclick="toggleButton4(this)" type="button"><img src="./assets/IMG/pmr.svg"><p>Equipement PMR</p></button>
                        </div>
                    </div>
                    <input type="hidden" id="equipement" name="equipement" required/>
                </div>
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
            </script>
            <button name="btn_validation"  class="validation" type="submit">SUIVANT</button>
        </div>    
    </div>    
    </form>
</section> 
</main>
<script src="./assets/JS/script_logement_p4.js"></script>

</body>
</html>