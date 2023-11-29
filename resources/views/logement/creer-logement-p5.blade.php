
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
</head>


<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<header>
        <x-Navbar></x-Navbar>
    </header>
<main>
<section class="part1">
<form action="{{route('creer_logement', ['page' => 6])}}" method="get">
    <div>    
        <section class="p1">
            <div class='p1-5'>
                <div class="abc">
                    <div class='p1-5-nom'><h3>De quelles installations dispose votre logement ?</h3></div>
                    <div>
                        <div>
                            <button id="btn34" name="jacuzzi" onclick="toggleButton2(this)" type="button"><img src="{{asset('img/installations/jacuzzi.png')}}"><p>Jacuzzi</p></button>
                            <button id="btn35" name="sauna" onclick="toggleButton2(this)" type="button"><img src="{{asset('img/installations/sauna.png')}}"><p>Sauna</p></button>
                        </div>
                        <div>
                            <button id="btn36" name="piscine" onclick="toggleButton2(this)" type="button"><img src="{{asset('img/installations/piscine.png')}}"><p>Piscine</p></button>
                            <button id="btn37" name="climatisation" onclick="toggleButton2(this)" type="button"><img src="{{asset('img/installations/climatisation.png')}}"><p>Climatisation</p></button>
                        </div>
                        <div class="boutonbas">
                            <button id="btn38" name="hammam" onclick="toggleButton2(this)" type="button"><img src="{{asset('img/installations/hammam.png')}}"><p>Hammam</p></button>
                            <button id="btn39" name="espace travail" onclick="toggleButton2(this)" type="button"><img style="width: 30%" src="{{asset('img/installations/espace_de_travail.png')}}"><p>Espace de travail</p></button>
                        </div>
                    </div>
                </div>   
            </div> 
        </section>
        <section class="p2">
            <div class='p2-5'>
                <div class="abc">
                    <div class='p2-5-nom'><h3>De quels services dispose votre logement ?</h3></div>
                    <div>    
                        <div>
                            <button id="btn40" name="menage" onclick="toggleButton5(this)" type="button"><img src="{{asset('img/services/menage.png')}}"><p>Ménage</p></button>
                            <button id="btn41" name="linge" onclick="toggleButton5(this)" type="button"><img src="{{asset('img/services/linge.png')}}"><p>Linge</p></button>
                        </div>
                        <div>
                            <button id="btn42" name="taxi" onclick="toggleButton5(this)" type="button"><img src="{{asset('img/services/taxi.png')}}"><p>Taxi</p></button>
                            <button id="btn43" name="ustensiles cuisine" onclick="toggleButton5(this)" type="button"><img src="{{asset('img/services/ustensiles_de_cuisine.png')}}"><p>Ustensiles de cuisine</p></button>
                        </div>
                        <div>
                            <button id="btn44" name="velo" onclick="toggleButton5(this)" type="button"><img src="{{asset('img/services/velo.png')}}"><p>Vélo</p></button>
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
<script src="{{asset('js/script_logement_p5.js')}}"></script>
</body>
</html>