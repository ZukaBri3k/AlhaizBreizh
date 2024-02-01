//Ici mon JS pour la déconnexion
var deconnexion = document.getElementById('logout');

deconnexion.addEventListener('click', function(event) {
    event.preventDefault();
    var url = this.href;

    Swal.fire({
        title: "Êtes vous sûr de vouloir vous déconnectez ?",
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
            Swal.fire({
                title: "Deconnexion !",
                text: "Vous allez être déconnecter.",
                icon: "success",
                confirmButtonColor: "#21610B",
                background: '#F6F5EE',
                allowOutsideClick: false,
                customClass: {
                    title: 'generation_cle'
                },
                //En dessous je fait la redirection après la confirmation de la suppression de la clé API
            }).then(() => {
                window.location.href = url;
            });
        }
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
                title: "Votre clé API à été copiée dans le presse papier",
                background: '#F6F5EE',
                allowOutsideClick: false,
                customClass: {
                    title: 'generation_cle'
                },
            });
        })
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
                Swal.fire({
                    title: "Supprimer !",
                    text: "Votre clé API à bien été supprimer.",
                    icon: "success",
                    confirmButtonColor: "#21610B",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'generation_cle'
                    },
                    //En dessous je fait la redirection après la confirmation de la suppression de la clé API
                }).then(() => {
                    window.location.href = url;
                });
            } else {
                Swal.fire({
                    title: "Annuler !",
                    text: "Votre clé API n'a pas été supprimer.",
                    icon: "error",
                    confirmButtonColor: "#21610B",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'generation_cle'
                    },
                });
            }
        });
    });
}





//Ici mon JS pour la génération de la clé API
document.querySelector('.api').addEventListener('submit', function(event) {
    event.preventDefault();

    Swal.fire({
        title: "La clé a bien été créée",
        icon: "success",
        confirmButtonColor: "#21610B",
        confirmButtonText: "OK",
        background: '#F6F5EE',
        customClass: {
            title: 'generation_cle'
        },
        allowOutsideClick: false,
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
    });
});