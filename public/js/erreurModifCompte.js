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

let telephone = document.getElementsByClassName('Telephone');

for (let i = 0; i < telephone.length; i++) {
    telephone[i].addEventListener('input', function () {
        this.value = this.value.replace(/\s/g, '');
        this.value = this.value.replace(/(\d{2})(?=\d)/g, '$1 ');
    })
}

let pasLettre = document.getElementsByClassName('pasLettre');

for (let i = 0; i < pasLettre.length; i++) {
    pasLettre[i].addEventListener('input', function () {
        if (this.value.match(/[a-zA-Z]+/)) {
            this.value = this.value.replace(/[a-zA-Z]+/, '');
        }
    })
}

let codePostal = document.getElementsByClassName('codePostal');

for (let i = 0; i < codePostal.length; i++) {
    codePostal[i].addEventListener('input', function () {
        if(!this.value.match(/^[0-9AaBb]+$/)) {
            this.value = this.value.replace(/[^0-9AaBb]+/g, '');
        }
    })
}

let btnSubmit = document.getElementsByClassName('create-account-btn');

for (let i = 0; i < btnSubmit.length; i++) {
    btnSubmit[i].addEventListener('click', function (e) {
        let telephone = document.getElementsByClassName('Telephone');

        telephone[0].value = telephone[0].value.replace(/\s/g, '');
    })
}