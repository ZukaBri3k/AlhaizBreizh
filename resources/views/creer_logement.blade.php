
<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8" />
<title>Créer mon logement</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<meta name="créer logement" content=""/>
<meta name="keywords" content="AlHaizBreizh"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset ('css/style_logement.css')}}">
<!DOCTYPE html>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <header>
        <x-Navbar></x-Navbar>
    </header>
<main>
    <section class="p-top">
        <h1>Dites nous tout sur votre logement !</h1>
    </section>
<section class="part1">
<form action="{{route ('myProprietaireAccount')}}" method="GET">
    <div>    
        <section class="p1">
            <div class='p1-1'>
                <div class="abc">
                    <div class='p1-1-nom'><h3>De quelle nature est votre logement ?* </h3><p title="obligatoire">* Veuillez selectionner une nature de logement</p></div>
                    <div>
                        <button id="btn1" name="maison" type="button"><img src="{{asset ('img/maison.svg')}}"><p>Maison</p></button>
                        <button id="btn2" name="appartement" type="button"><img class="appart" src="{{asset ('img/appartement.svg')}}"><p>Appartement</p></button>
                    </div>
                    <div>
                        <button id="btn3" name="villa" type="button"><img src="{{asset ('img/villa.png')}}"><p>Villa d'exception</p></button>
                        <button id="btn4" name="bateau" type="button"><img src="{{asset ('img/bateau.png')}}bateau.png"><p>Bateau</p></button>
                    </div>           
                 <input type="hidden" id="nature_logement" name="nature_logement" />

                </div>
            </div>
            <div class='p1-2'>
                <div class="abc">
                    <div class='p1-2-nom'><h3>Décrivez-nous votre logement * </h3><p title="obligatoire">* Tous les champs sont obligatoires et doivent être remplis</p></div>
                    <div class='champ1'><textarea name="description"  placeholder="Saisissez la description du logement"></textarea></div>      
                </div>
            </div>
            <div class="p1-3">
                <div class="abc">
                    <section class="p1-3-1">
                        <p>Surface habitable : </p>
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
            <div class='p1-4'>
                <div class="abc">
                    <div class='p1-4-nom'><h3>De quels aménagements propose votre logement ?* </h3><p title="obligatoire">* Veuillez selectionner au moins un aménagement de logement</p></div>
                    <div>
                        <div>
                            <button id="btn5" name="terrasse" onclick="toggleButton(this)" type="button"><img src="{{asset ('img/terrasse.svg')}}"><p>Terrasse</p></button>
                            <button id="btn6" name="jardin" onclick="toggleButton(this)" type="button"><img src="{{asset ('img/jardin.svg')}}"><p>Jardin</p></button>
                        </div>
                        <div>
                            <button id="btn7" name="balcon" onclick="toggleButton(this)" type="button"><img src="{{asset ('img/balcon.svg')}}"><p>Balcon</p></button>
                            <button id="btn8" name="parking prive" onclick="toggleButton(this)" type="button"><img src="{{asset ('img/parking_p.svg')}}"><p>Parking privé</p></button>
                        </div>
                        <div class="boutonbas">
                            <button id="btn9" name="parking public" onclick="toggleButton(this)" type="button"><img src="{{asset ('img/parking.svg')}}"><p>Parking public</p></button>
                        </div>
                        <label>Autre :</label><input style="width:350px; margin-left:15px;" name='autre_ame' placeholder="Parking, Jardin, ..." value = '' type='text'>
                   </div>
                   <input type="hidden" id="amenagement_logement" name="amenagement_logement" />
                </div>
            </div>
            <div class='p1-5'>
                <div class="abc">
                    <div class='p1-5-nom'><h3>De quelles installations propose votre logement ?*</h3><p title="obligatoire">* Veuillez selectionner au moins une installation de logement</p></div>
                    <div>
                        <div>
                            <button id="btn10" name="jacuzzi" onclick="toggleButton2(this)" type="button"><img src="{{asset ('img/jacuzzi.svg')}}"><p>Jacuzzi</p></button>
                            <button id="btn11" name="sauna" onclick="toggleButton2(this)" type="button"><img src="{{asset ('img/sauna.svg')}}"><p>Sauna</p></button>
                        </div>
                        <div>
                            <button id="btn12" name="piscine" onclick="toggleButton2(this)" type="button"><img src="{{asset ('img/piscine.svg')}}"><p>Piscine</p></button>
                            <button id="btn13" name="climatisation" onclick="toggleButton2(this)" type="button"><img src="{{asset ('img/climatisation.svg')}}"><p>Climatisation</p></button>
                        </div>
                        <div class="boutonbas">
                            <button id="btn14" name="hammam" onclick="toggleButton2(this)" type="button"><img src="{{asset ('img/hammam.png')}}"><p>Hammam</p></button>
                        </div>
                        <label>Autre :</label><input style="width:350px; margin-left:15px;" name='autre_inst' placeholder="Sauna, Climatisation..." value = '' type='text'>
                    </div>
                    <input type="hidden" id="installation_logement" name="installation_logement" />
                </div>
            </div>
            <div class='p1-6'>
                <div class="abc">
                    <div class='p1-6-nom'><h3>Quelles sont les charges additionnelles que vous souhaitez proposer ?</h3></div>
                    <div>
                        <button id="btn15" name="menage" onclick="toggleButton3(this)" type="button"><img src="{{asset ('img/menage.svg')}}"><p>Ménage</p></button>
                        <button id="btn16" name="animaux" onclick="toggleButton3(this)" type="button"><img src="{{asset ('img/animaux.svg')}}"><p>Animaux</p></button>
                    </div>
                    <div>
                        <button id="btn17" name="taxe" onclick="toggleButton3(this)" type="button"><img src="{{asset ('img/taxe.svg')}}"><p>Taxe</p></button>
                        <button id="btn18" name="personne supplémentaire"  onclick="toggleButton3(this)" type="button"><img src="{{asset ('img/personne_sup.svg')}}"><p>Personne supplémentaire</p></button>
                    </div>
                    <label>Autre :</label><input style="width:350px; margin-left:15px;" name='autre_charge' placeholder="Animaux, Taxe..." value = '' type='text'>
                </div>
                <input type="hidden" id="charge" name="charge" />
            </div>
            <div class='p1-7'>
                <div class="abc">
                    <div class='p1-7-nom'><h3>Vous-voulez faire payer par paypal ?</h3></div>
                    <div>
                            <button id="btn19" name="btn_paypal" type="button"><img src=""></button>
                            <label>Paypal :</label><input style="width:380px; margin-left:15px;" name='lien_paypal' placeholder="Lien Paypal" value = '' type='text'>
                        </div>
                </div>
            </div>
            <div class='p1-8'>
                <div class="abc">
                    <div class='p1-8-nom'><h3>Quelle sera la photo de couverture de votre logement ?*</h3><p title="obligatoire">* Veuillez insérer au moins une photo de couverture pour votre logement</p></div>
                        <div class="import_image">
                            <label>Insérer une photo :</label><div><input id="btn40" name="image_1" type="file"><img src="{{asset ('img/Download.png')}}"></input>

                        </div>
                    </div>             
                </div>
            </div>
        </section>
        <section class="p2">
            <div class="p2-1">
                <div class="abc">
                    <div class='p2-1-nom'><h3>Ou se situe votre logement ?*</h3><p title="obligatoire">* Veuillez insérer au moins une photo de couverture pour votre logement</p></div>
                    <section class="p2-1-1">   
                        <div><img src="{{asset ('img/location.png')}}"><input style="width:550px; margin-left:15px;" name='adresse' placeholder="Saisissez votre adresse" value = '' type='text'></div>
                        <div><img src="{{asset ('img/bat.png')}}"><input style="width:550px; margin-left:15px;" name='ville' placeholder="Saisissez votre ville" value = '' type='text'></div>
                        <div><img src="{{asset ('img/enveloppe.png')}}"><input style="width:150px; margin-left:15px;" name='cp' placeholder="Code postal" value = '' type='number'></div> 
                    </section>    
                    <section class="p2-1-2">
                        <div><img src="{{asset ('img/longitude.png')}}"><input style="width:150px; margin-left:15px;" name='longitude' placeholder="Longitude" value = '' type='number'></div>
                        <div><img src="{{asset ('img/latitude.png')}}"><input style="width:150px; margin-left:15px;" name='latitude' placeholder="Latitude" value = '' type='number'></div>
                    </section>  
                </div>
            </div>
            <div class='p2-2'>
                <div class="abc">
                    <div class='p2-2-nom'><h3>De quel type est votre logement ?*</h3><p title="obligatoire">* Veuillez sélectionner un  type de logement (pour en savoir plus, <a href="">cliquez ici</a>)</p></div>
                    <div>
                        <button id="btn21" name="T1" type="button"><img src="{{asset ('img/sofa1.png')}}"><p>T1</p></button>
                        <button id="btn22" name="T2" type="button"><img src="{{asset ('img/sofa2.png')}}"><p>T2</p></button>
                    </div>
                    <div>
                        <button id="btn23" name="T3" type="button"><img src="{{asset ('img/sofa3.png')}}"><p>T3</p></button>
                        <button id="btn24" name="T4" type="button"><img src="{{asset ('img/chair1.svg')}}"><p>T4</p></button>
                    </div>
                    <div>
                        <button id="btn25" name="T5" type="button"><img src="{{asset ('img/chair2.svg')}}"><p>T5</p></button>
                        <button id="btn26" name="studio" type="button"><img src="{{asset ('img/chair3.svg')}}"><p>Studio</p></button>
                    </div>
                    <label>Autre :</label><input style="width:350px; margin-left:15px;" name='autre_type' placeholder="Triplex..." value = '' type='text'>
                </div>
                <input type="hidden" id="type_logement" name="type_logement" />
            </div>
            <div class="p2-3">
                <div class="abc">
                    <div class='p2-3-nom'><h3>Quel sera le titre de votre logement ?*</h3><p title="obligatoire">* Tous les champs sont obligatoires et doivent être remplis</p></div>
                        <section class="p2-1-1">   
                            <div style="width:650px"><input style="width:600px; margin-left:15px;" name='libelle' placeholder="Saisissez le libellé du logement" value = '' type='text'></div>
                            <div style="width:650px"><input style="width:600px; margin-left:15px;" name='accroche' value = '' placeholder="Saisissez l'accroche du logement" type='text'></div>
                        </section>     
                </div>
            </div>
            <div class='p2-4'>
                <div class="abc">
                    <div class='p2-4-nom'><h3>Quels équipements propose votre logement ?*</h3><p title="obligatoire">* Veuillez sélectionner au moins un équipement de logement</p></div>
                    <div>
                        <div>
                            <button id="btn27" name="wifi" onclick="toggleButton4(this)" type="button"><img src="{{asset ('img/wifi.svg')}}"><p>Wifi</p></button>
                            <button id="btn28" name="tv" onclick="toggleButton4(this)" type="button"><img src="{{asset ('img/tv.svg')}}"><p>Télévision</p></button>
                        </div>
                        <div>
                            <button id="btn29" name="cuisine" onclick="toggleButton4(this)" type="button"><img src="{{asset ('img/cuisine.svg')}}"><p>Cuisine</p></button>
                            <button id="btn30" name="lave-linge" onclick="toggleButton4(this)" type="button"><img src="{{asset ('img/lave_linge.svg')}}"><p>Lave-linge</p></button>
                        </div>
                        <div class="boutonbas">
                            <button id="btn31" name="lave-vaisselle" onclick="toggleButton4(this)" type="button"><img src="{{asset ('img/lave_vaisselle.svg')}}"><p>Lave-vaisselle</p></button>
                        </div>
                        <label>Autre :</label><input style="width:350px; margin-left:15px;" name='autre_equip' placeholder="Wifi, Cuisine..." value = '' type='text'>       
                    </div>
                    <input type="hidden" id="equipement" name="equipement" />
                </div>
            </div>
            <div class='p2-5'>
                <div class="abc">
                    <div class='p2-5-nom'><h3>De quels services propose votre logement ?*</h3><p title="obligatoire">* Veuillez sélectionner au moins un service de logement</p></div>
                    <div>    
                        <div>
                            <button id="btn32" name="menage" onclick="toggleButton5(this)" type="button"><img src="{{asset ('img/menage2.svg')}}"><p>Ménage</p></button>
                            <button id="btn33" name="linge" onclick="toggleButton5(this)" type="button"><img src="{{asset ('img/linge.svg')}}"><p>Linge</p></button>
                        </div>
                        <div class="boutonbas">
                            <button id="btn34" name="taxi" onclick="toggleButton5(this)" type="button"><img src="{{asset ('img/taxi.svg')}}"><p>Taxi</p></button>
                        </div>
                    </div>
                    <label>Autre :</label><input style="width:350px; margin-left:15px;" name='autre_service' placeholder="Taxi, Linge..." value = '' type='text'>
                </div>
                <input type="hidden" id="services" name="services" />
            </div>
            <div class='p2-6'>
                <div class="abc">
                    <div class='p2-6-nom'><h3>Quel sera le prix par nuit de votre logement ?*</h3><p title="obligatoire">* Veuillez renseigner le prix par nuit du logement</p></div>
                    <div><input name='prix' style="width:150px; margin-left:15px;" placeholder="Prix par nuit" value = '' type='number'>€</div>
                </div>
            </div>
            <div class='p2-7'>
                <div class="abc">
                    <div class='p2-7-nom'>
                        <h3>Quelle sera votre condition d'annulation ?*</h3>
                        <p style="width:600px" title="obligatoire">* Veuillez choisir une condition d'annulation du logement</p>
                    </div>
                    <div>
                        <button id="btn35" name="strictes" type="button"></button>
                        <label>Strictes :</label>
                        <p>Remboursement intégral pour les annulations effectuées dans les 48H suivant la réservation si la date d’arrivée intervient dans 14 jours ou plus. Remboursement à hauteur de 50% pour les annulations effectuées au moins 7 jours avant la date d’arrivée. Aucun remboursement pour les annulations effectuées dans les 7 jours précédant la date d’arrivée.</p>
                    </div>
                    <div>
                        <button id="btn36" name="flexible" type="button"></button>
                        <label>Flexible :</label>
                        <p>Remboursement intégral jusqu’à 3 jours avant la date d’arrivée</p>
                    </div>
                    <div>
                        <button id="btn37" name="non remboursable" type="button"></button>
                        <label>Non-remboursable :</label>
                        <p>Un·e propriétaire peut offrir une option non remboursable : le·la client·e paie 10% de moins son séjour, mais en cas d’annulation, la totalité du versement sera conservée, quelque soit la date de cette annulation.</p>
                    </div>
                    <input type="hidden" id="condition_annulation" name="condition_annulation" />
                </div>
            </div>
            <div class='p2-8'>
                <div class="abc">
                    <div class='p2-8-nom'>
                        <h3>Quelles seront les photos de votre logement ?*</h3>
                        <p title="obligatoire">* Veuillez insérer au moins une photo pour votre logement</p>
                    </div>
                    <div class="import_image">
                        <label>Insérer une photo :</label>
                        <div>
                            <input id="btn38" name="image_2" type="file">
                                <img src="{{asset ('img/Download.png')}}">
                            </input>
                        </div>
                    </div>
                    <div class="import_image">    
                        <label>Insérer une photo :</label>
                        <div>
                            <input id="btn39" name="image_3" type="file">
                                <img src="{{asset ('img/Download.png')}}">
                            </input>
                        </div>
                    </div>
                    <div class="import_image">
                        <label>Insérer une photo :</label>
                        <div>
                            <input id="btn40" name="image_4" type="file">
                                <img src="{{asset ('img/Download.png')}}">
                            </input>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>        

    <button name="btn_validation" class="validation" type="submit">VALIDER</button>
    </form>
</section> 
</main>
<footer>
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
</div>
</footer>
<script>
    const bouton1 = document.getElementById("btn1");

bouton1.addEventListener("click", () => {
    if(bouton1.style.backgroundColor == 'cyan'){
        bouton1.style.backgroundColor = 'white';
        bouton1.toggleButtonState();
    }else{
        if(bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan'){
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();

            bouton1.style.backgroundColor = 'cyan';
        }
        bouton1.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'maison';

    }
});
const bouton2 = document.getElementById("btn2");

bouton2.addEventListener("click", () => {
    if(bouton2.style.backgroundColor == 'cyan'){
        bouton2.style.backgroundColor = 'white';
        bouton2.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();

            bouton2.style.backgroundColor = 'cyan';
        }
        bouton2.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'appartement';

    }
});
const bouton3 = document.getElementById("btn3");

bouton3.addEventListener("click", () => {
    if(bouton3.style.backgroundColor == 'cyan'){
        bouton3.style.backgroundColor = 'white';
        bouton3.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton4.toggleButtonState();

            bouton3.style.backgroundColor = 'cyan';
        }
        bouton3.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'villa';

    }
});
const bouton4 = document.getElementById("btn4");

bouton4.addEventListener("click", () => {
    if(bouton4.style.backgroundColor == 'cyan'){
        bouton4.style.backgroundColor = 'white';
        bouton4.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();

            bouton4.style.backgroundColor = 'cyan';
        }
        bouton4.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'bateau';

    }
});

const bouton5 = document.getElementById("btn5");
const bouton6 = document.getElementById("btn6");
const bouton7 = document.getElementById("btn7");
const bouton8 = document.getElementById("btn8");
const bouton9 = document.getElementById("btn9");


bouton5.addEventListener("click", () => {
    if(bouton5.style.backgroundColor == 'cyan'){
        bouton5.style.backgroundColor = 'white';
        bouton5.toggleButtonState();
    }else{
        bouton5.style.backgroundColor = 'cyan';
    }
});
bouton6.addEventListener("click", () => {
    if(bouton6.style.backgroundColor == 'cyan'){
        bouton6.style.backgroundColor = 'white';
        bouton6.toggleButtonState();

    }else{
        bouton6.style.backgroundColor = 'cyan';
    }
});
bouton7.addEventListener("click", () => {
    if(bouton7.style.backgroundColor == 'cyan'){
        bouton7.style.backgroundColor = 'white';
        bouton7.toggleButtonState();
    }else{
        bouton7.style.backgroundColor = 'cyan';
    }
});
bouton8.addEventListener("click", () => {
    if(bouton8.style.backgroundColor == 'cyan'){
        bouton8.style.backgroundColor = 'white';
        bouton8.toggleButtonState();
    }else{
        bouton8.style.backgroundColor = 'cyan';
    }
});
bouton9.addEventListener("click", () => {
    if(bouton9.style.backgroundColor == 'cyan'){
        bouton9.style.backgroundColor = 'white';
        bouton9.toggleButtonState();
    }else{
        bouton9.style.backgroundColor = 'cyan';
    }
});


const bouton10 = document.getElementById("btn10");
const bouton11 = document.getElementById("btn11");
const bouton12 = document.getElementById("btn12");
const bouton13 = document.getElementById("btn13");
const bouton14 = document.getElementById("btn14");


bouton10.addEventListener("click", () => {
    if(bouton10.style.backgroundColor == 'cyan'){
        bouton10.style.backgroundColor = 'white';
        bouton10.toggleButtonState();
    }else{
        bouton10.style.backgroundColor = 'cyan';
    }
});
bouton11.addEventListener("click", () => {
    if(bouton11.style.backgroundColor == 'cyan'){
        bouton11.style.backgroundColor = 'white';
        bouton11.toggleButtonState();
    }else{
        bouton11.style.backgroundColor = 'cyan';
    }
});
bouton12.addEventListener("click", () => {
    if(bouton12.style.backgroundColor == 'cyan'){
        bouton12.style.backgroundColor = 'white';
        bouton12.toggleButtonState();
    }else{
        bouton12.style.backgroundColor = 'cyan';
    }
});
bouton13.addEventListener("click", () => {
    if(bouton13.style.backgroundColor == 'cyan'){
        bouton13.style.backgroundColor = 'white';
        bouton13.toggleButtonState();
    }else{
        bouton13.style.backgroundColor = 'cyan';
    }
});
bouton14.addEventListener("click", () => {
    if(bouton14.style.backgroundColor == 'cyan'){
        bouton14.style.backgroundColor = 'white';
        bouton14.toggleButtonState();
    }else{
        bouton14.style.backgroundColor = 'cyan';
    }
});


const bouton15 = document.getElementById("btn15");
const bouton16 = document.getElementById("btn16");
const bouton17 = document.getElementById("btn17");
const bouton18 = document.getElementById("btn18");
const bouton19 = document.getElementById("btn19");


bouton15.addEventListener("click", () => {
    if(bouton15.style.backgroundColor == 'cyan'){
        bouton15.style.backgroundColor = 'white';
        bouton15.toggleButtonState();
    }else{
        bouton15.style.backgroundColor = 'cyan';
    }
});
bouton16.addEventListener("click", () => {
    if(bouton16.style.backgroundColor == 'cyan'){
        bouton16.style.backgroundColor = 'white';
        bouton16.toggleButtonState();
    }else{
        bouton16.style.backgroundColor = 'cyan';
    }
});
bouton17.addEventListener("click", () => {
    if(bouton17.style.backgroundColor == 'cyan'){
        bouton17.style.backgroundColor = 'white';
        bouton17.toggleButtonState();
    }else{
        bouton17.style.backgroundColor = 'cyan';
    }
});
bouton18.addEventListener("click", () => {
    if(bouton18.style.backgroundColor == 'cyan'){
        bouton18.style.backgroundColor = 'white';
        bouton18.toggleButtonState();
    }else{
        bouton18.style.backgroundColor = 'cyan';
    }
});
bouton19.addEventListener("click", () => {
    if(bouton19.style.backgroundColor == 'cyan'){
        bouton19.style.backgroundColor = 'white';
        bouton19.toggleButtonState();
    }else{
        bouton19.style.backgroundColor = 'cyan';
    }
});



const bouton21 = document.getElementById("btn21");
const bouton22 = document.getElementById("btn22");
const bouton23 = document.getElementById("btn23");
const bouton24 = document.getElementById("btn24");
const bouton25 = document.getElementById("btn25");
const bouton26 = document.getElementById("btn26");


bouton21.addEventListener("click", () => {
    if(bouton21.style.backgroundColor == 'cyan'){
        bouton21.style.backgroundColor = 'white';
        bouton21.toggleButtonState();
    }else{
        if(bouton22.style.backgroundColor == 'cyan' || bouton23.style.backgroundColor == 'cyan' || bouton24.style.backgroundColor == 'cyan' || bouton25.style.backgroundColor == 'cyan' || bouton26.style.backgroundColor == 'cyan'){
            bouton22.style.backgroundColor = 'white';
            bouton23.style.backgroundColor = 'white';
            bouton24.style.backgroundColor = 'white';
            bouton25.style.backgroundColor = 'white';
            bouton26.style.backgroundColor = 'white';
            bouton22.toggleButtonState();
            bouton23.toggleButtonState();
            bouton24.toggleButtonState();
            bouton25.toggleButtonState();
            bouton26.toggleButtonState();


            bouton21.style.backgroundColor = 'cyan';
        }
        bouton21.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T1';

    }
});

bouton22.addEventListener("click", () => {
    if(bouton22.style.backgroundColor == 'cyan'){
        bouton22.style.backgroundColor = 'white';
        bouton22.toggleButtonState();
    }else{
        if(bouton21.style.backgroundColor == 'cyan' || bouton23.style.backgroundColor == 'cyan' || bouton24.style.backgroundColor == 'cyan' || bouton25.style.backgroundColor == 'cyan' || bouton26.style.backgroundColor == 'cyan'){
            bouton21.style.backgroundColor = 'white';
            bouton23.style.backgroundColor = 'white';
            bouton24.style.backgroundColor = 'white';
            bouton25.style.backgroundColor = 'white';
            bouton26.style.backgroundColor = 'white';
            bouton21.toggleButtonState();
            bouton23.toggleButtonState();
            bouton24.toggleButtonState();
            bouton25.toggleButtonState();
            bouton26.toggleButtonState();


            bouton22.style.backgroundColor = 'cyan';
        }
        bouton22.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T2';

    }
});

bouton23.addEventListener("click", () => {
    if(bouton23.style.backgroundColor == 'cyan'){
        bouton23.style.backgroundColor = 'white';
        bouton23.toggleButtonState();
    }else{
        if(bouton21.style.backgroundColor == 'cyan' || bouton22.style.backgroundColor == 'cyan' || bouton24.style.backgroundColor == 'cyan' || bouton25.style.backgroundColor == 'cyan' || bouton26.style.backgroundColor == 'cyan'){
            bouton21.style.backgroundColor = 'white';
            bouton22.style.backgroundColor = 'white';
            bouton24.style.backgroundColor = 'white';
            bouton25.style.backgroundColor = 'white';
            bouton26.style.backgroundColor = 'white';
            bouton21.toggleButtonState();
            bouton22.toggleButtonState();
            bouton24.toggleButtonState();
            bouton25.toggleButtonState();
            bouton26.toggleButtonState();


            bouton23.style.backgroundColor = 'cyan';
        }
        bouton23.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T3';

    }
});

bouton24.addEventListener("click", () => {
    if(bouton24.style.backgroundColor == 'cyan'){
        bouton24.style.backgroundColor = 'white';
        bouton24.toggleButtonState();
    }else{
        if(bouton21.style.backgroundColor == 'cyan' || bouton22.style.backgroundColor == 'cyan' || bouton23.style.backgroundColor == 'cyan' || bouton25.style.backgroundColor == 'cyan' || bouton26.style.backgroundColor == 'cyan'){
            bouton21.style.backgroundColor = 'white';
            bouton22.style.backgroundColor = 'white';
            bouton23.style.backgroundColor = 'white';
            bouton25.style.backgroundColor = 'white';
            bouton26.style.backgroundColor = 'white';
            bouton21.toggleButtonState();
            bouton22.toggleButtonState();
            bouton23.toggleButtonState();
            bouton25.toggleButtonState();
            bouton26.toggleButtonState();


            bouton24.style.backgroundColor = 'cyan';
        }
        bouton24.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T4';

    }
});

bouton25.addEventListener("click", () => {
    if(bouton25.style.backgroundColor == 'cyan'){
        bouton25.style.backgroundColor = 'white';
        bouton25.toggleButtonState();
    }else{
        if(bouton21.style.backgroundColor == 'cyan' || bouton22.style.backgroundColor == 'cyan' || bouton23.style.backgroundColor == 'cyan' || bouton24.style.backgroundColor == 'cyan' || bouton26.style.backgroundColor == 'cyan'){
            bouton21.style.backgroundColor = 'white';
            bouton22.style.backgroundColor = 'white';
            bouton23.style.backgroundColor = 'white';
            bouton24.style.backgroundColor = 'white';
            bouton26.style.backgroundColor = 'white';
            bouton21.toggleButtonState();
            bouton22.toggleButtonState();
            bouton23.toggleButtonState();
            bouton24.toggleButtonState();
            bouton26.toggleButtonState();


            bouton25.style.backgroundColor = 'cyan';
        }
        bouton25.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T5';

    }
});

bouton26.addEventListener("click", () => {
    if(bouton26.style.backgroundColor == 'cyan'){
        bouton26.style.backgroundColor = 'white';
        bouton26.toggleButtonState();
    }else{
        if(bouton21.style.backgroundColor == 'cyan' || bouton22.style.backgroundColor == 'cyan' || bouton23.style.backgroundColor == 'cyan' || bouton24.style.backgroundColor == 'cyan' || bouton25.style.backgroundColor == 'cyan'){
            bouton21.style.backgroundColor = 'white';
            bouton22.style.backgroundColor = 'white';
            bouton23.style.backgroundColor = 'white';
            bouton24.style.backgroundColor = 'white';
            bouton25.style.backgroundColor = 'white';
            bouton21.toggleButtonState();
            bouton22.toggleButtonState();
            bouton23.toggleButtonState();
            bouton24.toggleButtonState();
            bouton25.toggleButtonState();


            bouton26.style.backgroundColor = 'cyan';
        }
        bouton26.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'studio';

    }
});


const bouton27 = document.getElementById("btn27");
const bouton28 = document.getElementById("btn28");
const bouton29 = document.getElementById("btn29");
const bouton30 = document.getElementById("btn30");
const bouton31 = document.getElementById("btn31");


bouton27.addEventListener("click", () => {
    if(bouton27.style.backgroundColor == 'cyan'){
        bouton27.style.backgroundColor = 'white';
        bouton27.toggleButtonState();
    }else{
        bouton27.style.backgroundColor = 'cyan';
    }
});
bouton28.addEventListener("click", () => {
    if(bouton28.style.backgroundColor == 'cyan'){
        bouton28.style.backgroundColor = 'white';
        bouton28.toggleButtonState();

    }else{
        bouton28.style.backgroundColor = 'cyan';
    }
});
bouton29.addEventListener("click", () => {
    if(bouton29.style.backgroundColor == 'cyan'){
        bouton29.style.backgroundColor = 'white';
        bouton29.toggleButtonState();

    }else{
        bouton29.style.backgroundColor = 'cyan';
    }
});
bouton30.addEventListener("click", () => {
    if(bouton30.style.backgroundColor == 'cyan'){
        bouton30.style.backgroundColor = 'white';
        bouton30.toggleButtonState();

    }else{
        bouton30.style.backgroundColor = 'cyan';
    }
});
bouton31.addEventListener("click", () => {
    if(bouton31.style.backgroundColor == 'cyan'){
        bouton31.style.backgroundColor = 'white';
        bouton31.toggleButtonState();

    }else{
        bouton31.style.backgroundColor = 'cyan';
    }
});



const bouton32 = document.getElementById("btn32");
const bouton33 = document.getElementById("btn33");
const bouton34 = document.getElementById("btn34");

bouton32.addEventListener("click", () => {
    if(bouton32.style.backgroundColor == 'cyan'){
        bouton32.style.backgroundColor = 'white';
        bouton32.toggleButtonState();

    }else{
        bouton32.style.backgroundColor = 'cyan';
    }
});
bouton33.addEventListener("click", () => {
    if(bouton33.style.backgroundColor == 'cyan'){
        bouton33.style.backgroundColor = 'white';
        bouton33.toggleButtonState();

    }else{
        bouton33.style.backgroundColor = 'cyan';
    }
});
bouton34.addEventListener("click", () => {
    if(bouton34.style.backgroundColor == 'cyan'){
        bouton34.style.backgroundColor = 'white';
        bouton34.toggleButtonState();

    }else{
        bouton34.style.backgroundColor = 'cyan';
    }
});


const bouton35 = document.getElementById("btn35");
const bouton36 = document.getElementById("btn36");
const bouton37 = document.getElementById("btn37");


bouton35.addEventListener("click", () => {
    if(bouton35.style.backgroundColor == 'cyan'){
        bouton35.style.backgroundColor = 'white';
        bouton35.toggleButtonState();

    }else{
        if(bouton36.style.backgroundColor == 'cyan' || bouton37.style.backgroundColor == 'cyan' ){
            bouton36.style.backgroundColor = 'white';
            bouton37.style.backgroundColor = 'white';
            bouton36.toggleButtonState();
            bouton37.toggleButtonState();


            bouton35.style.backgroundColor = 'cyan';
        }
        bouton35.style.backgroundColor = 'cyan';
        document.getElementById('condition_annulation').value = 'stricte';

    }
});

bouton36.addEventListener("click", () => {
    if(bouton36.style.backgroundColor == 'cyan'){
        bouton36.style.backgroundColor = 'white';
        bouton36.toggleButtonState();

    }else{
        if(bouton35.style.backgroundColor == 'cyan' || bouton37.style.backgroundColor == 'cyan' ){
            bouton35.style.backgroundColor = 'white';
            bouton37.style.backgroundColor = 'white';
            bouton35.toggleButtonState();
            bouton37.toggleButtonState();


            bouton36.style.backgroundColor = 'cyan';
        }
        bouton36.style.backgroundColor = 'cyan';
        document.getElementById('condition_annulation').value = 'flexible';

    }
});

bouton37.addEventListener("click", () => {
    if(bouton37.style.backgroundColor == 'cyan'){
        bouton37.style.backgroundColor = 'white';
        bouton37.toggleButtonState();

    }else{
        if(bouton35.style.backgroundColor == 'cyan' || bouton36.style.backgroundColor == 'cyan' ){
            bouton35.style.backgroundColor = 'white';
            bouton36.style.backgroundColor = 'white';
            bouton35.toggleButtonState();
            bouton36.toggleButtonState();


            bouton37.style.backgroundColor = 'cyan';
        }
        bouton37.style.backgroundColor = 'cyan';
        document.getElementById('condition_annulation').value = 'non remboursable';

    }
});

$(document).ready(function(){
    $(window).scroll(function(){
      // Calculer la hauteur totale de la page
      var documentHeight = $(document).height();
      
      // Calculer la hauteur de la fenêtre visible
      var windowHeight = $(window).height();
      
      // Calculer la position de défilement
      var scrollHeight = $(window).scrollTop();
      
      // Calculer le pourcentage de défilement
      var scrollPercentage = (scrollHeight / (documentHeight - windowHeight)) * 100;
      
      // Mettre à jour la largeur de la barre de progression
      $("#myBar").width(scrollPercentage + "%");
    });
  });


  // Fonction pour basculer l'état du bouton
function toggleButtonState() {
    var myButton = document.getElementById("myButton");
  
    myButton.disabled = !myButton.disabled; 
}

var boutonsCliques = [];
var boutonsCliques2 = [];
var boutonsCliques3 = [];
var boutonsCliques4 = [];
var boutonsCliques5 = [];

function toggleButton(button) {
    // Récupérer la valeur associée au bouton
    var value = button.getAttribute('name');

    // Vérifier si le bouton a déjà été cliqué
    var index = boutonsCliques.indexOf(value);
    if (index !== -1) {
        // Le bouton a été cliqué une seconde fois, retirer la valeur
        boutonsCliques.splice(index, 1);
    } else {
        // Le bouton est cliqué pour la première fois, ajouter la valeur
        boutonsCliques.push(value);
    }

    // Mettre à jour la valeur du champ de formulaire caché
    document.getElementById('amenagement_logement').value = boutonsCliques.join(',');
}

function toggleButton2(button) {
    // Récupérer la valeur associée au bouton
    var value = button.getAttribute('name');

    // Vérifier si le bouton a déjà été cliqué
    var index = boutonsCliques2.indexOf(value);
    if (index !== -1) {
        // Le bouton a été cliqué une seconde fois, retirer la valeur
        boutonsCliques2.splice(index, 1);
    } else {
        // Le bouton est cliqué pour la première fois, ajouter la valeur
        boutonsCliques2.push(value);
    }

    // Mettre à jour la valeur du champ de formulaire caché
    document.getElementById('installation_logement').value = boutonsCliques2.join(',');
}
function toggleButton3(button) {
    // Récupérer la valeur associée au bouton
    var value = button.getAttribute('name');

    // Vérifier si le bouton a déjà été cliqué
    var index = boutonsCliques3.indexOf(value);
    if (index !== -1) {
        // Le bouton a été cliqué une seconde fois, retirer la valeur
        boutonsCliques3.splice(index, 1);
    } else {
        // Le bouton est cliqué pour la première fois, ajouter la valeur
        boutonsCliques3.push(value);
    }

    // Mettre à jour la valeur du champ de formulaire caché
    document.getElementById('charge').value = boutonsCliques3.join(',');
}

function toggleButton4(button) {
    // Récupérer la valeur associée au bouton
    var value = button.getAttribute('name');

    // Vérifier si le bouton a déjà été cliqué
    var index = boutonsCliques4.indexOf(value);
    if (index !== -1) {
        // Le bouton a été cliqué une seconde fois, retirer la valeur
        boutonsCliques4.splice(index, 1);
    } else {
        // Le bouton est cliqué pour la première fois, ajouter la valeur
        boutonsCliques4.push(value);
    }

    // Mettre à jour la valeur du champ de formulaire caché
    document.getElementById('equipement').value = boutonsCliques4.join(',');
}


function toggleButton5(button) {
    // Récupérer la valeur associée au bouton
    var value = button.getAttribute('name');

    // Vérifier si le bouton a déjà été cliqué
    var index = boutonsCliques5.indexOf(value);
    if (index !== -1) {
        // Le bouton a été cliqué une seconde fois, retirer la valeur
        boutonsCliques5.splice(index, 1);
    } else {
        // Le bouton est cliqué pour la première fois, ajouter la valeur
        boutonsCliques5.push(value);
    }

    // Mettre à jour la valeur du champ de formulaire caché
    document.getElementById('services').value = boutonsCliques5.join(',');
}
    </script>
</body>
</html>