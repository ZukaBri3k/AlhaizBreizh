
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8" />
<title>Créer mon logement</title>
<meta name="créer logement" content=""/>
<meta name="keywords" content="AlHaizBreizh"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/style_logement.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('js/script_logement.js')}}"></script>
</head>


<body>
    <header>
        <div>
            <img class="img_header1" src="{{asset('img/Logo_desktop.png')}}">
            <img class="img_header2" src="{{asset('img/profil.png')}}">
        </div>    
        <hr>
    </header>
<main>
<section class="part1">
<form action="{{route('creer_logement', ['page' => 3])}}" method="GET">
    <div>    
        <section class="p1">
            <div class='p1-2'>
                <div class="abc">
                <div class='p1-2-nom'><h3>Décrivez-nous votre logement  </h3><p title="obligatoire">* Tous les champs sont obligatoires et doivent être remplis</p></div>
                    <div class='champ1'><textarea name="description"  placeholder="Saisissez la description du logement"></textarea></div>      
                </div>
            </div>
        </section>
        <section class="p2">
        <div class="p1-3">
                <div class="abc">
                    <section class="p1-3-1">
                        <p>Surface habitable (m²) : </p>
                        <p>Nombre de personnes max : </p>
                        <p>Nombre de chambre(s) : </p>    
                        <p>Nombre de salle de bain : </p>      
                    </section>
                    <section class="p1-3-2">    
                        <input name='surface' value = '' type='number'>
                        <input name='nb_p_max' value = '' type='number'>
                        <input name='nb_chambre' value = '' type='number'>
                        <input name='sdb' value = '' type='number'>
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
            </script>            <button name="btn_validation"  class="validation" type="submit">SUIVANT</button>
        </div>    
    </div>    
    </form>
</section> 
</main>
<script src="{{asset('js/script_logement.js')}}"></script>
</body>
</html>