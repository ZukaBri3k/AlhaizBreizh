
//-----------------------------Filtre Reservations-----------------------------//
function filtre() {
    let ListeDevis = document.querySelectorAll(".listeMesReservations .devis");
    let tabDevis = Array.from(ListeDevis);
    let selectionFiltre = document.querySelector("#selectionFiltre");
    let filtre = selectionFiltre.value;
    let counter = 0;

    tabDevis.forEach((devis) => {
        if (filtre == "Aucun") {
            devis.style.display = "flex";
            counter++;
        }else if(devis.classList[2] != filtre) {
            devis.style.display = "none";
        } else {
            devis.style.display = "flex";
            counter++;
        }
    });

    let msgFiltreVide = document.getElementById("msgFiltreVide");

    if(counter == 0) {
        msgFiltreVide.style.display = "block";
    } else {
        msgFiltreVide.style.display = "none";
    }
}

let select = document.getElementById("selectionFiltre");
select.addEventListener("change", filtre);


//-----------------------------Tri Date-----------------------------//

function compareDates(dateString1, dateString2) {
    var date1 = new Date(dateString1);
    var date2 = new Date(dateString2);

    // Comparaison des dates
    if (date1 < date2) {
        return -1;
    } else if (date1 > date2) {
        return 1;
    } else {
        return 0;
    }
}


let tri = 0;
function triDate() {
    let ListeDevis = document.querySelectorAll(".listeMesReservations .devis");
    let tabDevis = Array.from(ListeDevis);
    let btnTriDate = document.querySelector("#btnTriDate");
    if(tri == 0) {
        tri = 1;
        btnTriDate.innerHTML = "Trier par date (du plus récent)";
        tabDevis.sort((a,b) => {
            return compareDates(a.classList[1], b.classList[1]);
        });
    } else {
        tri = 0;
        btnTriDate.innerHTML = "Trier par date (du plus ancien)";
        tabDevis.sort((a,b) => {
            return compareDates(a.classList[1], b.classList[1]);
        });
        tabDevis.reverse();
    }

    let conteneurDevis = document.querySelector(".listeMesReservations");
    conteneurDevis.innerHTML = "";

    tabDevis.forEach((carte) => {
        conteneurDevis.appendChild(carte);
    });    
}


//-----------------------------Pop up Confirmation mise hors ligne logement-----------------------------

let btnHL = document.getElementsByClassName('HL');
btnHL = Array.from(btnHL);

btnHL.forEach((btn) => {
    btn.addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;
    
        Swal.fire({
            title: "Êtes vous sûr de vouloir mettre ce logement hors ligne ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#21610B",
            cancelButtonColor: "#EC3B53",
            background: '#F6F5EE',
            cancelButtonText: "Non",
            confirmButtonText: "Oui",
            allowOutsideClick: false,
            customClass: {
                title: 'popupFeedBack'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Logement hors ligne !",
                    text: "Votre logement à bien été mis hors ligne.",
                    icon: "success",
                    confirmButtonColor: "#21610B",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: '.popupFeedBack'
                    },
                    //En dessous je fait la redirection après la confirmation de la suppression de la clé API
                }).then(() => {
                    window.location.href = url;
                });
            }
        });
    });
});


//-----------------------------Pop up Confirmation mise en ligne logement-----------------------------

let btnEL = document.getElementsByClassName('EL');
btnEL = Array.from(btnEL);

btnEL.forEach((btn) => {
    btn.addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;
    
        Swal.fire({
            title: "Êtes vous sûr de vouloir mettre ce logement en ligne ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#21610B",
            cancelButtonColor: "#EC3B53",
            background: '#F6F5EE',
            cancelButtonText: "Non",
            confirmButtonText: "Oui",
            allowOutsideClick: false,
            customClass: {
                title: 'popupFeedBack'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Logement en ligne !",
                    text: "Votre logement à bien été mis en ligne.",
                    icon: "success",
                    confirmButtonColor: "#21610B",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: '.popupFeedBack'
                    },
                    //En dessous je fait la redirection après la confirmation de la suppression de la clé API
                }).then(() => {
                    window.location.href = url;
                });
            }
        });
    });
});