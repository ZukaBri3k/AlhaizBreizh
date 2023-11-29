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
        <x-Navbar></x-Navbar>
    </header>
<main>
<section class="part1">
<form action="{{route('creer_logement', ['page' => 2])}}" method="GET">
    <div>    
        <section class="p1">
            <div class='p1-1'>
                <div class="abc">
                    <div class='p1-1-nom'><h3>De quelle nature est votre logement ? </h3></div>
                    <div>
                        <button id="btn1" name="maison" type="button"><img src="{{ asset('/img/nature/maison.png') }}"><p>Maison</p></button>
                        <button id="btn2" name="appartement" type="button"><img class="appart" src="{{ asset('/img/nature/appartement.png') }}"><p>Appartement</p></button>
                    </div>
                    <div>
                        <button id="btn3" name="villa" type="button"><img src="{{ asset('/img/nature/villa.png') }}"><p>Villa d'exception</p></button>
                        <button id="btn4" name="bateau" type="button"><img src="{{ asset('/img/nature/bateau.png') }}"><p>Bateau</p></button>
                    </div> 
                    <div>
                        <button id="btn5" name="chambre_hote" type="button"><img src="{{ asset('/img/nature/chambre_hote.png') }}"><p>Chambre d'hôtes</p></button>
                        <button id="btn6" name="maison_hote" type="button"><img src="{{ asset('/img/nature/maison_hote.png') }}"><p>Maison d'hôtes</p></button>
                    </div>     
                    <div>
                        <button id="btn7" name="cabane" type="button"><img src="{{ asset('/img/nature/cabane.png') }}"><p>Cabane</p></button>
                        <button id="btn8" name="caravane" type="button"><img src="{{ asset('/img/nature/caravane.png') }}"><p>Caravane</p></button>
                    </div>         
                 <input type="hidden" id="nature_logement" name="nature_logement" />

                </div>
            </div>
        </section>
        <section class="p2">
            <div class='p2-2'>
                <div class="abc">
                    <div class='p2-2-nom'><h3>De quel type est votre logement ?</h3></div>
                    <div>
                        <button id="btn9" name="T1" type="button"><img src="{{ asset('/img/type/t1.png') }}"><p>T1</p></button>
                        <button id="btn10" name="T2" type="button"><img src="{{ asset('/img/type/t2.png') }}"><p>T2</p></button>
                    </div>
                    <div>
                        <button id="btn11" name="T3" type="button"><img src="{{ asset('/img/type/t3.png') }}"><p>T3</p></button>
                        <button id="btn12" name="T4" type="button"><img src="{{ asset('/img/type/t4.png') }}"><p>T4</p></button>
                    </div>
                    <div>
                        <button id="btn13" name="studio" type="button"><img src="{{ asset('/img/type/studio.png') }}"><p>Studio</p></button>
                        <button id="btn14" name="duplex" type="button"><img src="{{ asset('/img/type/duplex.png') }}"><p>Duplex</p></button>
                    </div>
                    <div>
                        <button id="btn15" name="triplex" type="button"><img src="{{ asset('/img/type/triplex.png') }}"><p>Triplex</p></button>
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