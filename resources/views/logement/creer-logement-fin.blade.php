<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8" />
<title>Créer mon logement</title>
<meta name="créer logement" content=""/>
<meta name="keywords" content="AlHaizBreizh"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/IMG/logo.png">
<link rel="stylesheet" href="{{asset('css/style_logement.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('js/script_logement.js')}}"></script>
</head>


<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<header>
        <x-Navbar></x-Navbar>
    </header>
<main>
<section class="part1">
<form action="{{route('details_previsu',['id' => 4])}}" method="get">
    <div>    
        <section class="p1">        
            <div class='p1-8'>
                    <div class="abc">
                        <div class='p1-8-nom'><h3>Quelle sera la photo de couverture de votre logement ?</h3><p title="obligatoire">* Veuillez insérer au moins une photo de couverture pour votre logement</p></div>
                            <div class="import_image">
                                <label>Insérer une photo :</label><div><input id="btn40" name="image_1" type="file"><img src="{{asset('img/Download.png')}}"></input>

                            </div>
                        </div>             
                    </div>
            </div>
        </section>
        <section class="p2">
        <div class='p2-8'>
                <div class="abc">
                    <div class='p2-8-nom'>
                        <h3>Quelles seront les photos de votre logement ?</h3>
                        <p title="obligatoire">* Veuillez insérer au moins une photo pour votre logement</p>
                    </div>
                    <div class="import_image">
                        <label>Insérer une photo :</label>
                        <div>
                            <input id="btn38" name="image_2" type="file">
                                <img src="{{asset('img/Download.png')}}">
                            </input>
                        </div>
                    </div>
                    <div class="import_image">    
                        <label>Insérer une photo :</label>
                        <div>
                            <input id="btn39" name="image_3" type="file">
                                <img src="{{asset('img/Download.png')}}">
                            </input>
                        </div>
                    </div>
                    <div class="import_image">
                        <label>Insérer une photo :</label>
                        <div>
                            <input id="btn40" name="image_4" type="file">
                                <img src="{{asset('img/Download.png')}}">
                            </input>
                        </div>
                    </div>
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
                    window.history.back();
                }
            </script>            
            <button class="monBouton">
            <svg width="100" height="100">

            </svg>
                Previsualisation
            </button>
        </div>    
    </div>    
    </form>
</section> 
</main>
<script src="{{asset('script_logement.js')}}"></script>
</body>
</html>