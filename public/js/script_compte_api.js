//Ici mon JS pour la déconnexion
var deconnexion = document.getElementById('logout');

deconnexion.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;

    Swal.fire({
        title: "Êtes vous sûr de vouloir vous déconnecter ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#21610B",
        cancelButtonColor: "#EC3B53",
        background: '#F6F5EE',
        cancelButtonText: "Annuler",
        confirmButtonText: "Confirmer",
        allowOutsideClick: false,
        customClass: {
            title: 'generation_cle'
        },
    }).then((result) => {
        window.location.href = url;
    }); 
});




//Ici mon JS pour copier la clé API dans le clipboard
copierTexte = (e, cle) => {
    e.preventDefault()
    navigator.clipboard.writeText(cle).then(() => {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "Texte copié dans le presse papier",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    });
}





//Ici mon JS pour la suppression de la clé API
var deleteLinks = document.getElementsByClassName('delete-link');

for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        event.preventDefault();
        var url = this.href;

        Swal.fire({
            title: "Êtes vous sûr de vouloir supprimer votre clé API ?",
            text: "Cette action n'est pas réversible !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#21610B",
            cancelButtonColor: "#EC3B53",
            background: '#F6F5EE',
            cancelButtonText: "Annuler",
            confirmButtonText: "Confirmer",
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    });
}


//Ici mon JS pour la suppression d'un compte
var cloturer = document.getElementById('cloturer');

cloturer.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;
    let trigger = false;

    Swal.fire({
        title: "Êtes vous sûr de vouloir supprimer votre compte ?",
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
                title: "Veuillez entrer 'CONFIRMER' pour supprimer votre compte !",
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
                            trigger = true;
                            return Swal.fire({
                                title: "Votre compte va être supprimer !",
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
                                title: "Annuler !",
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
            });
        }
    });
});

function checkIcalInputs(e) {
    let checkboxReservations = document.getElementById('reservation');
    let checkboxDevis = document.getElementById('demande_reservation');
    let date_deb = document.getElementById('date_deb');
    let date_fin = document.getElementById('date_fin');
    let messageErreur = document.getElementById('icalErreur');

    if(!checkboxReservations.checked && !checkboxDevis.checked) {
        e.preventDefault();
        messageErreur.innerHTML = "Veuillez sélectionner au moins une option";
        messageErreur.style.visibility = "visible";
    } else if(date_deb.value > date_fin.value) {
        e.preventDefault();
        messageErreur.innerHTML = "La date de début doit être inférieure à la date de fin";
        messageErreur.style.visibility = "visible";
    } else if (date_deb.value === "" || date_fin.value === "") {
        e.preventDefault();
        messageErreur.innerHTML = "Veuillez remplir les dates";
        messageErreur.style.visibility = "visible";
    } else if (date_deb.value === date_fin.value) {
        e.preventDefault();
        messageErreur.innerHTML = "Les dates ne peuvent pas être identiques";
        messageErreur.style.visibility = "visible";
    }
}

let btnDelIcal = document.getElementsByClassName("delIcal")

for(let i = 0; i < btnDelIcal.length; i++) {
    btnDelIcal[i].addEventListener('click', function(e) {
        e.preventDefault();
        var url = this.href;

        Swal.fire({
            title: "Êtes vous sûr de vouloir supprimer ce lien d'abonnement",
            text: "Tous les agendas synchronisés avec ce lien ne seront plus mis à jour !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#21610B",
            cancelButtonColor: "#EC3B53",
            background: '#F6F5EE',
            cancelButtonText: "Annuler",
            confirmButtonText: "Confirmer",
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        }).then((result) => {
            if (result.isConfirmed) {               
                window.location.href = url;
            }
        });
    })
};