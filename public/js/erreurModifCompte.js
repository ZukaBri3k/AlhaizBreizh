let pasChiffre = document.getElementsByClassName('pasChiffre');

for (let i = 0; i < pasChiffre.length; i++) {
    pasChiffre[i].addEventListener('input', function () {
        if (this.value.match(/[0-9]+/)) {
            this.value = this.value.replace(/[0-9]+/, '');
        }
    })
}

let pasSigne = document.getElementsByClassName('pasSigne');

for (let i = 0; i < pasSigne.length; i++) {
    pasSigne[i].addEventListener('input', function () {
        if (this.value.match(/[\!\:\.\/;\?\,_"()\[\]{}\+=~&\$£%*\§µ<>#@°²]/)) {
            this.value = this.value.replace(/[\!\:\.\/;\?\,_"()\[\]{}\+=~&\$£%*\§µ<>#@°²]/, '');
        }
    })
}

