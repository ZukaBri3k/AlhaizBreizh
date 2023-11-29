
/*  Page creer-logement-p5.php  */

const bouton34 = document.getElementById("btn34");
const bouton35 = document.getElementById("btn35");
const bouton36 = document.getElementById("btn36");
const bouton37 = document.getElementById("btn37");
const bouton38 = document.getElementById("btn38");
const bouton39 = document.getElementById("btn39");

bouton34.addEventListener("click", () => {
    if(bouton34.style.backgroundColor == 'cyan'){
        bouton34.style.backgroundColor = 'white';
        bouton34.toggleButtonState();
    }else{
        bouton34.style.backgroundColor = 'cyan';
    }
});
bouton35.addEventListener("click", () => {
    if(bouton35.style.backgroundColor == 'cyan'){
        bouton35.style.backgroundColor = 'white';
        bouton35.toggleButtonState();

    }else{
        bouton35.style.backgroundColor = 'cyan';
    }
});
bouton36.addEventListener("click", () => {
    if(bouton36.style.backgroundColor == 'cyan'){
        bouton36.style.backgroundColor = 'white';
        bouton36.toggleButtonState();

    }else{
        bouton36.style.backgroundColor = 'cyan';
    }
});
bouton37.addEventListener("click", () => {
    if(bouton37.style.backgroundColor == 'cyan'){
        bouton37.style.backgroundColor = 'white';
        bouton37.toggleButtonState();

    }else{
        bouton37.style.backgroundColor = 'cyan';
    }
});
bouton38.addEventListener("click", () => {
    if(bouton38.style.backgroundColor == 'cyan'){
        bouton38.style.backgroundColor = 'white';
        bouton38.toggleButtonState();

    }else{
        bouton38.style.backgroundColor = 'cyan';
    }
});

bouton39.addEventListener("click", () => {
    if(bouton39.style.backgroundColor == 'cyan'){
        bouton39.style.backgroundColor = 'white';
        bouton39.toggleButtonState();

    }else{
        bouton39.style.backgroundColor = 'cyan';
    }
});

const bouton40 = document.getElementById("btn40");
const bouton41 = document.getElementById("btn41");
const bouton42 = document.getElementById("btn42");
const bouton43 = document.getElementById("btn43");
const bouton44 = document.getElementById("btn44");

bouton40.addEventListener("click", () => {
    if(bouton40.style.backgroundColor == 'cyan'){
        bouton40.style.backgroundColor = 'white';
        bouton40.toggleButtonState();

    }else{
        bouton40.style.backgroundColor = 'cyan';
    }
});
bouton41.addEventListener("click", () => {
    if(bouton41.style.backgroundColor == 'cyan'){
        bouton41.style.backgroundColor = 'white';
        bouton41.toggleButtonState();

    }else{
        bouton41.style.backgroundColor = 'cyan';
    }
});
bouton42.addEventListener("click", () => {
    if(bouton42.style.backgroundColor == 'cyan'){
        bouton42.style.backgroundColor = 'white';
        bouton42.toggleButtonState();

    }else{
        bouton42.style.backgroundColor = 'cyan';
    }
});
bouton43.addEventListener("click", () => {
    if(bouton43.style.backgroundColor == 'cyan'){
        bouton43.style.backgroundColor = 'white';
        bouton43.toggleButtonState();

    }else{
        bouton43.style.backgroundColor = 'cyan';
    }
});
bouton44.addEventListener("click", () => {
    if(bouton44.style.backgroundColor == 'cyan'){
        bouton44.style.backgroundColor = 'white';
        bouton44.toggleButtonState();

    }else{
        bouton44.style.backgroundColor = 'cyan';
    }
});

function toggleButtonState() {
    var myButton = document.getElementById("myButton");
    myButton.disabled = !myButton.disabled; 
}

var boutonsCliques3 = [];

function toggleButton3(button) {
    var value = button.getAttribute('name');
    var index = boutonsCliques3.indexOf(value);
    if (index !== -1) {
        boutonsCliques3.splice(index, 1);
    } else {
        boutonsCliques3.push(value);
    }
    document.getElementById('installation_logement').value = boutonsCliques3.join(',');
}

var boutonsCliques4 = [];

function toggleButton4(button) {
    var value = button.getAttribute('name');
    var index = boutonsCliques4.indexOf(value);
    if (index !== -1) {
        boutonsCliques4.splice(index, 1);
    } else {
        boutonsCliques4.push(value);
    }
    document.getElementById('services').value = boutonsCliques4.join(',');
}