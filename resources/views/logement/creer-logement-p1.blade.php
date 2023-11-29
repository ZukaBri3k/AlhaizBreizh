
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
<form action="creer-logement-p2.php" method="POST">
    <div>    
        <section class="p1">
            <div class="p2-1">
                    <div class="abc">
                        <div class='p2-1-nom'><h3>Ou se situe votre logement ?</h3><p title="obligatoire">* Veuillez insérer au moins une photo de couverture pour votre logement</p></div>
                        <section class="p2-1-1">   
                            <div><img style="width:2.5%" src="./assets/IMG/location.png"><input style="width:500px; margin-left:15px;" name='adresse' placeholder="Saisissez votre adresse" value = '' type='text'></div>
                            <div><img style="width:3%" src="./assets/IMG/bat.png"><input style="width:500px; margin-left:15px;" name='ville' placeholder="Saisissez votre ville" value = '' type='text'></div>
                            <div style="width:250px"><img style="width:11%" src="./assets/IMG/enveloppe.png"><input style="width:100px; margin-left:15px;" name='cp' placeholder="Code postal" value = '' type='number'></div> 
                        </section>    
                        <section class="p2-1-2">
                            <div><img style="width:7%" src="./assets/IMG/longitude.png"><input style="width:150px; margin-left:15px;" name='longitude' placeholder="Longitude" value = '' type='number'></div>
                            <div><img style="width:7%" src="./assets/IMG/latitude.png"><input style="width:150px; margin-left:15px;" name='latitude' placeholder="Latitude" value = '' type='number'></div>
                        </section>  
                    </div>
                </div>
        </section>
        <section class="p2">
            <div class="p2-3">
                <div class="abc">
                    <div class='p2-3-nom'><h3>Quel sera le titre de votre logement ?</h3><p title="obligatoire">* Tous les champs sont obligatoires et doivent être remplis</p></div>
                        <section class="p2-1-1">   
                            <div style="width:650px"><img src="./assets/IMG/titre.svg"><input style="width:500px; margin-left:15px;" name='libelle' placeholder="Saisissez le libellé du logement" value = '' type='text'></div>
                            <div style="width:650px"><img src="./assets/IMG/libelle.svg"><input style="width:500px; margin-left:15px;" name='accroche' value = '' placeholder="Saisissez l'accroche du logement" type='text'></div>
                        </section>     
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
</body>
</html>