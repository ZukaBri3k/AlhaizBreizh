let pasChiffre = document.getElementsByClassName('pasChiffre');

for (let i = 0; i < pasChiffre.length; i++) {
    pasChiffre[i].addEventListener('input', function () {
        console.log("Chiffre")
        if (this.value.match(/[0-9]/)) {
            this.value = this.value.replace(/[0-9]/, '');
        }
    })
}