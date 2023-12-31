
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
            <div class='p1-4'>
                <div class="abc">
                    <div class='p1-4-nom'><h3>De quels aménagements dispose votre logement ?</h3>
                </div>
                    <div>
                        <div>
                            <button style="margin-right:30px" id="btn16" name="terrasse" onclick="toggleButton(this)" type="button"><img src="{{asset('img/terrasse.svg')}}"><p>Terrasse</p></button>
                            <button style="margin-right:30px" id="btn17" name="jardin" onclick="toggleButton(this)" type="button"><img src="{{asset('img/jardin.svg')}}"><p>Jardin</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn18" name="balcon" onclick="toggleButton(this)" type="button"><img src="{{asset('img/balcon.svg')}}"><p>Balcon</p></button>
                            <button style="margin-right:30px" id="btn19" name="parking prive" onclick="toggleButton(this)" type="button"><img src="{{asset('img/parking_p.svg')}}"><p>Parking privé</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn20" name="parking public" onclick="toggleButton(this)" type="button"><img src="{{asset('img/parking.svg')}}"><p>Parking public</p></button>
                            <button style="margin-right:30px" id="btn21" name="patio" onclick="toggleButton(this)" type="button"><img src="{{asset('img/amenagements/patio.png')}}"><p>Patio</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn22" name="salon hiver" onclick="toggleButton(this)" type="button"><img src="{{asset('img/amenagements/salon_hiver.png')}}"><p>Salon d'hiver</p></button>
                            <button style="margin-right:30px" id="btn23" name="veranda" onclick="toggleButton(this)" type="button"><img src="{{asset('img/amenagements/veranda.png')}}"><p>Véranda</p></button>
                        </div>
                   </div>
                   <input type="hidden" id="amenagement_logement" name="amenagement_logement" />
                </div>
            </div>
        </section>
        <section class="p2">
            <div class='p2-4'>
                <div class="abc">
                    <div class='p2-4-nom'><h3>De quels équipements dispose votre logement ?</h3>
                </div>
                    <div>
                        <div>
                            <button style="margin-right:30px" id="btn24" name="wifi" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/wifi.svg')}}"><p>Wifi</p></button>
                            <button style="margin-right:30px" id="btn25" name="tv" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/tv.svg')}}"><p>Télévision</p></button>
                            <button style="margin-right:30px" id="btn26" name="cuisine" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/cuisine.svg')}}"><p>Cuisine</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn27" name="lave-linge" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/lave_linge.svg')}}"><p>Lave-linge</p></button>
                            <button style="margin-right:30px" id="btn28" name="lave-vaisselle" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/lave_vaisselle.svg')}}"><p>Lave-vaisselle</p></button>
                            <button style="margin-right:30px" id="btn29" name="instrument" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/equipements/instrument.png')}}"><p>Instrument</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn30" name="appareil_sport" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/equipements/appareils_de_sport.png')}}"><p>Appareils de sport</p></button>
                            <button style="margin-right:30px" id="btn31" name="cheminee" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/equipements/cheminee.png')}}"><p>Cheminée</p></button>
                            <button style="margin-right:30px" id="btn32" name="barbecue" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/equipements/barbecue.png')}}"><p>Barbecue</p></button>
                        </div>
                        <div>
                            <button style="margin-right:30px" id="btn33" name="equip_pmr" onclick="toggleButton4(this)" type="button"><img src="{{asset('img/equipements/equipements_pmr.png')}}"><p>Equipement PMR</p></button>
                        </div>
                    </div>
                    <input type="hidden" id="equipement" name="equipement" />
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
<script src="{{asset('js/script_logement_p4.js')}}"></script>

</body>
</html>