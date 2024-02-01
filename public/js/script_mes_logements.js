
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
                }).then(() => {
                    window.location.href = url;
                });
            }
        });
    });
});


//-----------------------------Pop up Validation devis-----------------------------

let btnValiderDevis = document.getElementsByClassName('validerDevis');
btnValiderDevis = Array.from(btnValiderDevis);

btnValiderDevis.forEach((btn) => {
    btn.addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;

        Swal.fire({
            title: "Devis validé !",
            text: "La demande de devis a bien été validée.",
            icon: "success",
            confirmButtonColor: "#21610B",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: '.popupFeedBack'
            },
        }).then(() => {
            window.location.href = url;
        });
    });
});


//-----------------------------Pop up Validation devis-----------------------------

let btnRefuserDevis = document.getElementsByClassName('refuserDevis');
btnRefuserDevis = Array.from(btnRefuserDevis);

btnRefuserDevis.forEach((btn) => {
    btn.addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;
    
        Swal.fire({
            title: "Êtes vous sûr de vouloir refuser ?",
            text: "Cette action est irréversible ! Si vous refusez la demande de devis il sera impossible de revenir en arrière.",
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
                    title: "Devis refusé !",
                    text: "La demande de devis a bien été refusée.",
                    icon: "success",
                    confirmButtonColor: "#21610B",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: '.popupFeedBack'
                    },
                }).then(() => {
                    window.location.href = url;
                });
            }
        });
    });
});


//Ici mon JS pour la suppression d'un compte
let supprimerLogement = document.getElementsByClassName('SUPPR');
supprimerLogement = Array.from(supprimerLogement);

supprimerLogement.forEach((btn) => {
    btn.addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;
        let trigger = false;
    
        Swal.fire({
            title: "Êtes vous sûr de vouloir supprimer votre logement ?",
            text: "Cette action est irréversible ! Si vous supprimez votre logement il sera impossible de revenir en arrière.",
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
                    title: "Veuillez entrer 'CONFIRMER' pour supprimer votre logement !",
                    input: "text",
                    background: '#F6F5EE',
                    inputAttributes: {
                      autocapitalize: "off"
                    },
                    showCancelButton: true,
                    allowOutsideClick: false,
                    confirmButtonText: "Confirmer",
                    cancelButtonText: "Annuler",
                    cancelButtonColor: "#EC3B53",
                    confirmButtonColor: "#21610B",
                    showLoaderOnConfirm: true,
                    customClass: {
                        title: 'popupFeedBack'
                    },
                    preConfirm: async (confirm) => {
                        try {
                            if (confirm === "CONFIRMER") {
                                return Swal.fire({
                                    title: "Votre logement a bien été suprimé !",
                                    icon: "success",
                                    confirmButtonColor: "#21610B",
                                    confirmButtonText: "Ok",
                                    background: '#F6F5EE',
                                    customClass: {
                                        title: 'popupFeedBack'
                                    },
                                    allowOutsideClick: false,
                                }).then(() => {
                                    window.location.href = url;
                                });
                            } else {
                                trigger = true;
                                return Swal.fire({
                                    title: "Annulé !",
                                    text: "Annulation, vous n'avez pas entré 'CONFIRMER'.",
                                    icon: "error",
                                    confirmButtonColor: "#21610B",
                                    background: '#F6F5EE',
                                    allowOutsideClick: false,
                                    customClass: {
                                        title: 'popupFeedBack'
                                    },
                                });
                            }
                        } catch (error) {
                            console.log(error);
                        }
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then(() => {
                    if(trigger === false) {
                        Swal.fire({
                            title: "Annulé !",
                            text: "Votre logement n'a pas été supprimé.",
                            icon: "error",
                            confirmButtonColor: "#21610B",
                            background: '#F6F5EE',
                            allowOutsideClick: false,
                            customClass: {
                                title: 'popupFeedBack'
                            },
                        });
                    }
                });
            } else {
                Swal.fire({
                    title: "Annulé !",
                    text: "Votre logement n'a pas été supprimé.",
                    icon: "error",
                    confirmButtonColor: "#21610B",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'popupFeedBack'
                    },
                });
            }
        });
    });
});