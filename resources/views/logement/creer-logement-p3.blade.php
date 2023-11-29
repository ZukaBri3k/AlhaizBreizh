
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
<form action="{{route('creer_logement', ['page' => 4])}}" method="GET">
    <div>    
        <section class="p1">

                @for($i = 1; $i <= request()->get('nb_chambre'); $i++)
                        <div>
                            <div class="abc">
                                <h3>Chambre {{ $i }}</h3>
                                <section class="p1-3-1">
                                    <p>Nombre de lit simple : </p>
                                    <p>Nombre de lit double : </p>
                                    <p>Détails des lits disponibles : </p>    
                                </section>
                                <section class="p1-3-2">    
                                    <input name="nb_lit_s_{{$i}}" value = "" type="number">
                                    <input name="nb_lit_d_{{$i}}" value = "" type="number">
                                    <textarea name="detail_lits_{{$i}}" placeholder="Saisissez ici (255 caractères max)" value = "" type="text"></textarea>
                                </section>    
                            </div>
                        </div>
                @endfor
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
<script src="{{asset('js/script_logement.js')}}"></script>
</body>
</html>