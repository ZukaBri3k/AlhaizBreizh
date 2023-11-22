const blurBackground = document.getElementById("blur-background");  
const popup = document.getElementById("popup-container");
const closeBTN = document.getElementById("close-popup");
document.getElementById('open-popup').addEventListener('click',  () => {
    popup.style.display = "flex";
    blurBackground.style.display="flex";
});

closeBTN.addEventListener('click', () => {
    popup.style.display = "none";
    blurBackground.style.display="none";
});

/*Ajoutez un gestionnaire d'événements pour fermer la pop-up lorsque l'on clique en dehors*/
document.getElementById('popup-container').addEventListener('click', function (event) {
    if (event.target === this) {
        this.style.display = 'none';
    }
});