document.getElementById('open-popup').addEventListener('click', function () {
    document.getElementById('popup-container').style.display = 'flex';
});

document.getElementById('close-popup').addEventListener('click', function () {
    document.getElementById('popup-container').style.display = 'none';
});

// Ajoutez un gestionnaire d'événements pour fermer la pop-up lorsque l'on clique en dehors
document.getElementById('popup-container').addEventListener('click', function (event) {
    if (event.target === this) {
        this.style.display = 'none';
    }
});
