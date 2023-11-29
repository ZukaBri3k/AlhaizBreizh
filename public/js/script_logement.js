
/*  Page creer-logement.php  */

const bouton1 = document.getElementById("btn1");
const bouton2 = document.getElementById("btn2");
const bouton3 = document.getElementById("btn3");
const bouton4 = document.getElementById("btn4");
const bouton5 = document.getElementById("btn5");
const bouton6 = document.getElementById("btn6");
const bouton7 = document.getElementById("btn7");
const bouton8 = document.getElementById("btn8");

bouton1.addEventListener("click", () => {
    if(bouton1.style.backgroundColor == 'cyan'){
        bouton1.style.backgroundColor = 'white';
        bouton1.toggleButtonState();
    }else{
        if(bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton7.style.backgroundColor = 'white';
            bouton8.style.backgroundColor = 'white';
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();
            bouton6.toggleButtonState();
            bouton6.toggleButtonState();
            bouton7.toggleButtonState();
            bouton8.toggleButtonState();

            bouton1.style.backgroundColor = 'cyan';
        }
        bouton1.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'maison';

    }
    });

bouton2.addEventListener("click", () => {
    if(bouton2.style.backgroundColor == 'cyan'){
        bouton2.style.backgroundColor = 'white';
        bouton2.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton5.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton7.style.backgroundColor = 'white';
            bouton8.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();
            bouton5.toggleButtonState();
            bouton6.toggleButtonState();
            bouton7.toggleButtonState();
            bouton8.toggleButtonState();


            bouton2.style.backgroundColor = 'cyan';
        }
        bouton2.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'appartement';

    }
    });


bouton3.addEventListener("click", () => {
    if(bouton3.style.backgroundColor == 'cyan'){
        bouton3.style.backgroundColor = 'white';
        bouton3.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton5.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton5.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton7.style.backgroundColor = 'white';
            bouton8.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton4.toggleButtonState();
            bouton5.toggleButtonState();
            bouton6.toggleButtonState();
            bouton7.toggleButtonState();
            bouton8.toggleButtonState();

            bouton3.style.backgroundColor = 'cyan';
        }
        bouton3.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'villa';

    }
    });

bouton4.addEventListener("click", () => {
    if(bouton4.style.backgroundColor == 'cyan'){
        bouton4.style.backgroundColor = 'white';
        bouton4.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton5.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton5.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton7.style.backgroundColor = 'white';
            bouton8.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();
            bouton5.toggleButtonState();
            bouton6.toggleButtonState();
            bouton7.toggleButtonState();
            bouton8.toggleButtonState();

            bouton4.style.backgroundColor = 'cyan';
        }
        bouton4.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'bateau';

    }
    });

bouton5.addEventListener("click", () => {

if(bouton5.style.backgroundColor == 'cyan'){
    bouton5.style.backgroundColor = 'white';
    bouton5.toggleButtonState();
}else{
    if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
        bouton1.style.backgroundColor = 'white';
        bouton2.style.backgroundColor = 'white';
        bouton3.style.backgroundColor = 'white';
        bouton4.style.backgroundColor = 'white';
        bouton6.style.backgroundColor = 'white';
        bouton7.style.backgroundColor = 'white';
        bouton8.style.backgroundColor = 'white';
        bouton1.toggleButtonState();
        bouton2.toggleButtonState();
        bouton3.toggleButtonState();
        bouton4.toggleButtonState();
        bouton6.toggleButtonState();
        bouton7.toggleButtonState();
        bouton8.toggleButtonState();

        bouton5.style.backgroundColor = 'cyan';
    }
    bouton5.style.backgroundColor = 'cyan';
    document.getElementById('nature_logement').value = 'chambre_hote';

    }
    });

bouton6.addEventListener("click", () => {

    if(bouton6.style.backgroundColor == 'cyan'){
        bouton6.style.backgroundColor = 'white';
        bouton6.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton5.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton5.style.backgroundColor = 'white';
            bouton7.style.backgroundColor = 'white';
            bouton8.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();
            bouton5.toggleButtonState();
            bouton7.toggleButtonState();
            bouton8.toggleButtonState();
    
            bouton6.style.backgroundColor = 'cyan';
        }
        bouton6.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'maison_hote';
    
        }
    });

bouton7.addEventListener("click", () => {

    if(bouton7.style.backgroundColor == 'cyan'){
        bouton7.style.backgroundColor = 'white';
        bouton7.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton5.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton8.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton5.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton8.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();
            bouton5.toggleButtonState();
            bouton6.toggleButtonState();
            bouton8.toggleButtonState();
    
            bouton7.style.backgroundColor = 'cyan';
        }
        bouton7.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'cabane';
    
        }
    });

bouton8.addEventListener("click", () => {
    if(bouton8.style.backgroundColor == 'cyan'){
        bouton8.style.backgroundColor = 'white';
        bouton8.toggleButtonState();
    }else{
        if(bouton1.style.backgroundColor == 'cyan' || bouton2.style.backgroundColor == 'cyan' || bouton3.style.backgroundColor == 'cyan' || bouton4.style.backgroundColor == 'cyan' || bouton5.style.backgroundColor == 'cyan' || bouton6.style.backgroundColor == 'cyan' || bouton7.style.backgroundColor == 'cyan'){
            bouton1.style.backgroundColor = 'white';
            bouton2.style.backgroundColor = 'white';
            bouton3.style.backgroundColor = 'white';
            bouton4.style.backgroundColor = 'white';
            bouton5.style.backgroundColor = 'white';
            bouton6.style.backgroundColor = 'white';
            bouton7.style.backgroundColor = 'white';
            bouton1.toggleButtonState();
            bouton2.toggleButtonState();
            bouton3.toggleButtonState();
            bouton4.toggleButtonState();
            bouton5.toggleButtonState();
            bouton6.toggleButtonState();
            bouton7.toggleButtonState();
    
            bouton8.style.backgroundColor = 'cyan';
        }
        bouton8.style.backgroundColor = 'cyan';
        document.getElementById('nature_logement').value = 'caravane';
    
        }
    });

const bouton9 = document.getElementById("btn9");
const bouton10 = document.getElementById("btn10");
const bouton11 = document.getElementById("btn11");
const bouton12 = document.getElementById("btn12");
const bouton13 = document.getElementById("btn13");
const bouton14 = document.getElementById("btn14");
const bouton15 = document.getElementById("btn15");


bouton9.addEventListener("click", () => {
    if(bouton9.style.backgroundColor == 'cyan'){
        bouton9.style.backgroundColor = 'white';
        bouton9.toggleButtonState();
    }else{
        if(bouton10.style.backgroundColor == 'cyan' || bouton11.style.backgroundColor == 'cyan' || bouton12.style.backgroundColor == 'cyan' || bouton13.style.backgroundColor == 'cyan' || bouton14.style.backgroundColor == 'cyan' || bouton15.style.backgroundColor == 'cyan'){
            bouton10.style.backgroundColor = 'white';
            bouton11.style.backgroundColor = 'white';
            bouton12.style.backgroundColor = 'white';
            bouton13.style.backgroundColor = 'white';
            bouton14.style.backgroundColor = 'white';
            bouton15.style.backgroundColor = 'white';
            bouton10.toggleButtonState();
            bouton11.toggleButtonState();
            bouton12.toggleButtonState();
            bouton13.toggleButtonState();
            bouton14.toggleButtonState();
            bouton15.toggleButtonState();

            bouton9.style.backgroundColor = 'cyan';
        }
        bouton9.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T1';

    }
});
bouton10.addEventListener("click", () => {
    if(bouton10.style.backgroundColor == 'cyan'){
        bouton10.style.backgroundColor = 'white';
        bouton10.toggleButtonState();
    }else{
        if(bouton9.style.backgroundColor == 'cyan' || bouton11.style.backgroundColor == 'cyan' || bouton12.style.backgroundColor == 'cyan' || bouton13.style.backgroundColor == 'cyan' || bouton14.style.backgroundColor == 'cyan' || bouton15.style.backgroundColor == 'cyan'){
            bouton9.style.backgroundColor = 'white';
            bouton11.style.backgroundColor = 'white';
            bouton12.style.backgroundColor = 'white';
            bouton13.style.backgroundColor = 'white';
            bouton14.style.backgroundColor = 'white';
            bouton15.style.backgroundColor = 'white';
            bouton9.toggleButtonState();
            bouton11.toggleButtonState();
            bouton12.toggleButtonState();
            bouton13.toggleButtonState();
            bouton14.toggleButtonState();
            bouton15.toggleButtonState();

            bouton10.style.backgroundColor = 'cyan';
        }
        bouton10.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T2';

    }
});

bouton11.addEventListener("click", () => {
    if(bouton11.style.backgroundColor == 'cyan'){
        bouton11.style.backgroundColor = 'white';
        bouton11.toggleButtonState();
    }else{
        if(bouton9.style.backgroundColor == 'cyan' || bouton10.style.backgroundColor == 'cyan' || bouton12.style.backgroundColor == 'cyan' || bouton13.style.backgroundColor == 'cyan' || bouton14.style.backgroundColor == 'cyan' || bouton15.style.backgroundColor == 'cyan'){
            bouton9.style.backgroundColor = 'white';
            bouton10.style.backgroundColor = 'white';
            bouton12.style.backgroundColor = 'white';
            bouton13.style.backgroundColor = 'white';
            bouton14.style.backgroundColor = 'white';
            bouton15.style.backgroundColor = 'white';
            bouton9.toggleButtonState();
            bouton10.toggleButtonState();
            bouton12.toggleButtonState();
            bouton13.toggleButtonState();
            bouton14.toggleButtonState();
            bouton15.toggleButtonState();

            bouton11.style.backgroundColor = 'cyan';
        }
        bouton11.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T3';

    }
});

bouton12.addEventListener("click", () => {
    if(bouton12.style.backgroundColor == 'cyan'){
        bouton12.style.backgroundColor = 'white';
        bouton12.toggleButtonState();
    }else{
        if(bouton9.style.backgroundColor == 'cyan' || bouton10.style.backgroundColor == 'cyan' || bouton11.style.backgroundColor == 'cyan' || bouton13.style.backgroundColor == 'cyan' || bouton14.style.backgroundColor == 'cyan' || bouton15.style.backgroundColor == 'cyan'){
            bouton9.style.backgroundColor = 'white';
            bouton10.style.backgroundColor = 'white';
            bouton11.style.backgroundColor = 'white';
            bouton13.style.backgroundColor = 'white';
            bouton14.style.backgroundColor = 'white';
            bouton15.style.backgroundColor = 'white';
            bouton9.toggleButtonState();
            bouton10.toggleButtonState();
            bouton11.toggleButtonState();
            bouton13.toggleButtonState();
            bouton14.toggleButtonState();
            bouton15.toggleButtonState();

            bouton12.style.backgroundColor = 'cyan';
        }
        bouton12.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'T4';

    }
});

bouton13.addEventListener("click", () => {
    if(bouton13.style.backgroundColor == 'cyan'){
        bouton13.style.backgroundColor = 'white';
        bouton13.toggleButtonState();
    }else{
        if(bouton9.style.backgroundColor == 'cyan' || bouton10.style.backgroundColor == 'cyan' || bouton11.style.backgroundColor == 'cyan' || bouton12.style.backgroundColor == 'cyan' || bouton14.style.backgroundColor == 'cyan' || bouton15.style.backgroundColor == 'cyan'){
            bouton9.style.backgroundColor = 'white';
            bouton10.style.backgroundColor = 'white';
            bouton11.style.backgroundColor = 'white';
            bouton12.style.backgroundColor = 'white';
            bouton14.style.backgroundColor = 'white';
            bouton15.style.backgroundColor = 'white';
            bouton9.toggleButtonState();
            bouton10.toggleButtonState();
            bouton11.toggleButtonState();
            bouton12.toggleButtonState();
            bouton14.toggleButtonState();
            bouton15.toggleButtonState();

            bouton13.style.backgroundColor = 'cyan';
        }
        bouton13.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'studio';

    }
});

bouton14.addEventListener("click", () => {
    if(bouton14.style.backgroundColor == 'cyan'){
        bouton14.style.backgroundColor = 'white';
        bouton14.toggleButtonState();
    }else{
        if(bouton9.style.backgroundColor == 'cyan' || bouton10.style.backgroundColor == 'cyan' || bouton11.style.backgroundColor == 'cyan' || bouton12.style.backgroundColor == 'cyan' || bouton13.style.backgroundColor == 'cyan' || bouton15.style.backgroundColor == 'cyan'){
            bouton9.style.backgroundColor = 'white';
            bouton10.style.backgroundColor = 'white';
            bouton11.style.backgroundColor = 'white';
            bouton12.style.backgroundColor = 'white';
            bouton13.style.backgroundColor = 'white';
            bouton15.style.backgroundColor = 'white';
            bouton9.toggleButtonState();
            bouton10.toggleButtonState();
            bouton11.toggleButtonState();
            bouton12.toggleButtonState();
            bouton13.toggleButtonState();
            bouton15.toggleButtonState();

            bouton14.style.backgroundColor = 'cyan';
        }
        bouton14.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'duplex';

    }
});

bouton15.addEventListener("click", () => {
    if(bouton15.style.backgroundColor == 'cyan'){
        bouton15.style.backgroundColor = 'white';
        bouton15.toggleButtonState();
    }else{
        if(bouton9.style.backgroundColor == 'cyan' || bouton10.style.backgroundColor == 'cyan' || bouton11.style.backgroundColor == 'cyan' || bouton12.style.backgroundColor == 'cyan' || bouton13.style.backgroundColor == 'cyan' || bouton14.style.backgroundColor == 'cyan'){
            bouton9.style.backgroundColor = 'white';
            bouton10.style.backgroundColor = 'white';
            bouton11.style.backgroundColor = 'white';
            bouton12.style.backgroundColor = 'white';
            bouton13.style.backgroundColor = 'white';
            bouton14.style.backgroundColor = 'white';
            bouton9.toggleButtonState();
            bouton10.toggleButtonState();
            bouton11.toggleButtonState();
            bouton12.toggleButtonState();
            bouton13.toggleButtonState();
            bouton14.toggleButtonState();

            bouton15.style.backgroundColor = 'cyan';
        }
        bouton15.style.backgroundColor = 'cyan';
        document.getElementById('type_logement').value = 'triplex';

    }
});

function toggleButtonState() {
    var myButton = document.getElementById("myButton");
    myButton.disabled = !myButton.disabled; 
}

var boutonsCliques5 = [];

function toggleButton5(button) {
    var value = button.getAttribute('name');
    var index = boutonsCliques5.indexOf(value);
    if (index !== -1) {
        boutonsCliques5.splice(index, 1);
    } else {
        boutonsCliques5.push(value);
    }
    document.getElementById('equipement').value = boutonsCliques5.join(',');
}