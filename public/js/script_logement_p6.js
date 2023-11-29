
/*  Page creer-logement-p6.php  */

const bouton45 = document.getElementById("btn45");
const bouton46 = document.getElementById("btn46");
const bouton47 = document.getElementById("btn47");
const bouton48 = document.getElementById("btn48");

bouton45.addEventListener("click", () => {
    if(bouton45.style.backgroundColor == 'cyan'){
        bouton45.style.backgroundColor = 'white';
        bouton45.toggleButtonState();
    }else{
        bouton45.style.backgroundColor = 'cyan';
    }
});
bouton46.addEventListener("click", () => {
    if(bouton46.style.backgroundColor == 'cyan'){
        bouton46.style.backgroundColor = 'white';
        bouton46.toggleButtonState();

    }else{
        bouton46.style.backgroundColor = 'cyan';
    }
});
bouton47.addEventListener("click", () => {
    if(bouton47.style.backgroundColor == 'cyan'){
        bouton47.style.backgroundColor = 'white';
        bouton47.toggleButtonState();

    }else{
        bouton47.style.backgroundColor = 'cyan';
    }
});
bouton48.addEventListener("click", () => {
    if(bouton48.style.backgroundColor == 'cyan'){
        bouton48.style.backgroundColor = 'white';
        bouton48.toggleButtonState();

    }else{
        bouton48.style.backgroundColor = 'cyan';
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
    document.getElementById('charge').value = boutonsCliques5.join(',');
}