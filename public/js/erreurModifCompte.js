document.addEventListener('DOMContentLoaded', function() {
    let telephone = document.getElementsByClassName('Telephone');

    for (let i = 0; i < telephone.length; i++) {
        res = ""
        for(let j = 0; j < telephone[i].value.length; j++) {
            if((j + 1) % 2 == 0 && j != 0) {
                res += telephone[i].value[j] + " ";
            } else {
                res += telephone[i].value[j];
            }
        }
        console.log(res);
        this.value = res.trim();
    }
})

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