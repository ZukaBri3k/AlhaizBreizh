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