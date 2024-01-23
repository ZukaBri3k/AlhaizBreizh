
/*  Page creer-logement-p4.php  */

const bouton16 = document.getElementById("btn16");
const bouton17 = document.getElementById("btn17");
const bouton18 = document.getElementById("btn18");
const bouton19 = document.getElementById("btn19");
const bouton20 = document.getElementById("btn20");
const bouton21 = document.getElementById("btn21");
const bouton22 = document.getElementById("btn22");
const bouton23 = document.getElementById("btn23");

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
bouton20.addEventListener("click", () => {
    if(bouton20.style.backgroundColor == 'cyan'){
        bouton20.style.backgroundColor = 'white';
        bouton20.toggleButtonState();

    }else{
        bouton20.style.backgroundColor = 'cyan';
    }
});

bouton21.addEventListener("click", () => {
    if(bouton21.style.backgroundColor == 'cyan'){
        bouton21.style.backgroundColor = 'white';
        bouton21.toggleButtonState();

    }else{
        bouton21.style.backgroundColor = 'cyan';
    }
});
bouton22.addEventListener("click", () => {
    if(bouton22.style.backgroundColor == 'cyan'){
        bouton22.style.backgroundColor = 'white';
        bouton22.toggleButtonState();

    }else{
        bouton22.style.backgroundColor = 'cyan';
    }
});
bouton23.addEventListener("click", () => {
    if(bouton23.style.backgroundColor == 'cyan'){
        bouton23.style.backgroundColor = 'white';
        bouton23.toggleButtonState();

    }else{
        bouton23.style.backgroundColor = 'cyan';
    }
});

const bouton24 = document.getElementById("btn24");
const bouton25 = document.getElementById("btn25");
const bouton26 = document.getElementById("btn26");
const bouton27 = document.getElementById("btn27");
const bouton28 = document.getElementById("btn28");
const bouton29 = document.getElementById("btn29");
const bouton30 = document.getElementById("btn30");
const bouton31 = document.getElementById("btn31");
const bouton32 = document.getElementById("btn32");
const bouton33 = document.getElementById("btn33");

bouton24.addEventListener("click", () => {
    if(bouton24.style.backgroundColor == 'cyan'){
        bouton24.style.backgroundColor = 'white';
        bouton24.toggleButtonState();

    }else{
        bouton24.style.backgroundColor = 'cyan';
    }
});
bouton25.addEventListener("click", () => {
    if(bouton25.style.backgroundColor == 'cyan'){
        bouton25.style.backgroundColor = 'white';
        bouton25.toggleButtonState();

    }else{
        bouton25.style.backgroundColor = 'cyan';
    }
});
bouton26.addEventListener("click", () => {
    if(bouton26.style.backgroundColor == 'cyan'){
        bouton26.style.backgroundColor = 'white';
        bouton26.toggleButtonState();

    }else{
        bouton26.style.backgroundColor = 'cyan';
    }
});
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

function toggleButtonState() {
    var myButton = document.getElementById("myButton");
    myButton.disabled = !myButton.disabled; 
}

var boutonsCliques = [];

function toggleButton(button) {
    var value = button.getAttribute('name');
    var index = boutonsCliques.indexOf(value);
    if (index !== -1) {
        boutonsCliques.splice(index, 1);
    } else {
        boutonsCliques.push(value);
    }
    document.getElementById('amenagement_logement').value = boutonsCliques.join(',');
}

var boutonsCliques2 = [];

function toggleButton2(button) {
    var value = button.getAttribute('name');
    var index = boutonsCliques2.indexOf(value);
    if (index !== -1) {
        boutonsCliques2.splice(index, 1);
    } else {
        boutonsCliques2.push(value);
    }
    document.getElementById('equipement').value = boutonsCliques2.join(',');
}