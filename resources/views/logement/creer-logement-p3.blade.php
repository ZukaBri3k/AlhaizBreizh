
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
<form action="creer-logement-p4.php" method="POST">
    <div>    
        <section class="p1">
            
            <?php 
                $i = 1;
                while ($i < $_POST["nb_chambre"]){
                    echo    '
                            <div>
                                <div class="abc">
                                    <h3>Chambre '. $i .'</h3>
                                    <section class="p1-3-1">
                                        <p>Nombre de lit simple : </p>
                                        <p>Nombre de lit double : </p>
                                        <p>Détails des lits disponibles : </p>    
                                    </section>
                                    <section class="p1-3-2">    
                                        <input name="nb_lit_s" value = "" type="number">
                                        <input name="nb_lit_d" value = "" type="number">
                                        <textarea name="detail_lits" placeholder="Saisissez içi (255 caractères max)" value = "" type="text">
                                    </section>    
                                </div>
                            </div>
                            ';
                }
            ?>
        </section>
        <section class="p2">
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
<script src="./assets/JS/script_logement.js"></script>
</body>
</html>