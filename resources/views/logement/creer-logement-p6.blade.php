
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8" />
<title>Créer mon logement</title>
<meta name="créer logement" content=""/>
<meta name="keywords" content="AlHaizBreizh"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/style_logement.css')}}">
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
<form action="{{route('creer_logement', ['page' => 5])}}" method="get">
    <div>    
        <section class="p1">
                <div class="p1-6">
                    <div class="abc">
                        <div class='p1-6-nom'><h3>Quelles sont les charges additionnelles que vous souhaitez proposer ?</h3></div>
                        <div>
                            <button id="btn45" name="menage" onclick="toggleButton3(this)" type="button"><img src="{{asset('img/charges/menage.png')}}"><p>Ménage</p></button>
                            <button id="btn46" name="animaux" onclick="toggleButton3(this)" type="button"><img src="{{asset('img/charges/animaux.png')}}"><p>Animaux</p></button>
                        </div>
                        <div>
                            <button id="btn47" name="taxe" onclick="toggleButton3(this)" type="button"><img src="{{asset('img/charges/taxe.png')}}"><p>Taxe</p></button>
                            <button id="btn48" name="personne supplémentaire"  onclick="toggleButton3(this)" type="button"><img src="{{asset('img/charges/personne_suplementaire.png')}}"><p>Personne supplémentaire</p></button>
                        </div>
                    </div>
                    <input type="hidden" id="charge" name="charge" />
                </div>
                <div class='p2-6'>
                    <div class="abc">
                        <div class='p2-6-nom'><h3>Quel sera le prix par nuit de votre logement ?*</h3><p title="obligatoire">* Veuillez renseigner le prix par nuit du logement</p></div>
                        <div><input name='prix' style="width:150px; margin-left:15px;" placeholder="Prix par nuit" value = '' type='number'>€</div>
                    </div>
                </div>
        </section>
        <section class="p2">
        <div class='p2-7'>
                <div class="abc">
                    <div class='p2-7-nom'>
                        <h3>Quelle sera votre condition d'annulation ?*</h3>
                        <p style="width:600px" title="obligatoire">* Veuillez choisir une condition d'annulation du logement</p>
                    </div>
                    <div class="condition">
                        <button id="btn49" name="strictes" type="button"></button>
                        <div>
                            <label>Strictes :</label>
                            <p>Remboursement intégral pour les annulations effectuées dans les 48H suivant la réservation si la date d’arrivée intervient dans 14 jours ou plus. Remboursement à hauteur de 50% pour les annulations effectuées au moins 7 jours avant la date d’arrivée. Aucun remboursement pour les annulations effectuées dans les 7 jours précédant la date d’arrivée.</p>
                        </div>    
                    </div>
                    <div class="condition">
                        <button id="btn50" name="flexible" type="button"></button>
                        <div>
                            <label>Flexible :</label>
                            <p>Remboursement intégral jusqu'à 3 jours avant la date d’arrivée</p>
                        </div>
                    </div>    
                    <div class="condition">
                        <button id="btn51" name="non remboursable" type="button"></button>
                        <div>
                            <label>Non-remboursable :</label>
                            <p>Un·e propriétaire peut offrir une option non remboursable : le·la client·e paie 10% de moins son séjour, mais en cas d’annulation, la totalité du versement sera conservée, quelque soit la date de cette annulation.</p>
                        </div>    
                    </div>
                    <input type="hidden" id="condition_annulation" name="condition_annulation" />
                </div>
            </div>
            <div class='p1-7'>
                <div class="abc">
                    <div class='p1-7-nom'><h3>Vous-voulez faire payer par paypal ?</h3></div>
                    <div>
                            <button id="btn52" name="btn_paypal" type="button"></button>
                            <label>Paypal :</label><input style="width:380px; margin-left:15px;" name='lien_paypal' placeholder="Lien Paypal" value = '' type='text'>
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
                    window.history.back();s
                }
            </script>            <button name="btn_validation"  class="validation" type="submit">SUIVANT</button>
        </div>    
    </div>    
    </form>
</section> 
</main>
<script src="{{asset('js/script_logement_p6.js')}}"></script>
</body>
</html>