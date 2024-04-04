
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
                        function showOptions() {
                            var select = document.getElementById('civilite_pers');
                            select.innerHTML = ''; // Efface l'option civilité

                            // Ajoute les options
                            var options = ['none', 'M.', 'MME.'];
                            options.forEach(function (option) {
                                var optionElement = document.createElement('option');
                                optionElement.value = option;
                                optionElement.text = option;
                                select.add(optionElement);
                            });
                        }

						jQuery(document).ready(function() {
                            jQuery("#pays_pers").countrySelect();
                        });

						document.getElementById('profile_pic').addEventListener('change', function(e) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                document.getElementById('image_pp_previsu').src = event.target.result;
                            }

                            reader.readAsDataURL(e.target.files[0]);
                        });
                    
						document.getElementById("confirmerMotDePasse").addEventListener("blur", verifierMotDePasse);

	function verifierMotDePasse() {
		

		var motDePasse = document.getElementById("password").value;
        var confirmationMotDePasse = document.getElementById("confirmerMotDePasse").value;
		console.log(confirmationMotDePasse);
	
		if (motDePasse != confirmationMotDePasse && confirmationMotDePasse != "" && motDePasse !="") {

            Toast.fire({
                icon: "error",
                title: "Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.",
                background: '#F6F5EE',
                allowOutsideClick: false,
                customClass: {
                    title: 'generation_cle'
                },
            });
		}
	}

    document.getElementById('telephone_pers').addEventListener('input', function(event) {
        const input = event.target;
        const regex = /^[0-9]+$/;
    
        if (!regex.test(input.value)) {
            input.value = input.value.slice(0, -1);
            input.setCustomValidity("Seuls les chiffres sont autorisés.");
        } else {
            input.setCustomValidity("");
        }
    });



    document.getElementById('code_postal_pers').addEventListener('input', function(event) {
        const input = event.target;
        const regex = /[0-9]/;
        
    
        if (!regex.test(input.value)) {
            input.value = input.value.slice(0, -1);
            input.setCustomValidity("Seuls les chiffres sont autorisés.");
            
        } else {
            input.setCustomValidity("");
        }
    });

document.getElementById('submit').addEventListener('click', function(event) {
    console.log("ici");
    var url = this.href;
    // Vérifier si le mot de passe contient au moins une majuscule
    var regex_maj = /[A-Z]/;
    var regex_min = /[a-z]/;
    var regex_chiffre = /[0-9]/;
    var MDP = document.getElementById("password").value;
    if (MDP.match(regex_maj))
        if(MDP.match(regex_min)){
            if(MDP.match(regex_chiffre)){
                Toast.fire({
                    icon: "success",
                    title: "Informations enregistrées",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'generation_cle'
                    },
                });
            }
            else{
                Toast.fire({
                    icon: "error",
                    title: "Le mot de passe doit contenir un chiffre",
                    background: '#F6F5EE',
                    allowOutsideClick: false,
                    customClass: {
                        title: 'generation_cle'
                    },
                });
                event.preventDefault();

            }
        }
        else{
            Toast.fire({
                icon: "error",
                title: "Le mot de passe doit contenir une minuscule",
                background: '#F6F5EE',
                allowOutsideClick: false,
                customClass: {
                    title: 'generation_cle'
                },
            });
            event.preventDefault();

        }

    else{
        Toast.fire({
            icon: "error",
            title: "Le mot de passe doit contenir une majuscule",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
            event.preventDefault();

        }
        
        var motDePasse = document.getElementById("password").value;
        var confirmationMotDePasse = document.getElementById("confirmerMotDePasse").value;
		console.log(confirmationMotDePasse);
	
		if (motDePasse != confirmationMotDePasse && confirmationMotDePasse != "" && motDePasse !="") {
            Toast.fire({
                icon: "error",
                title: "Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.",
                background: '#F6F5EE',
                allowOutsideClick: false,
                customClass: {
                    title: 'generation_cle'
                },
            });
			
            event.preventDefault();
		}
      
	}

        
)
document.getElementById('code_postal_pers').addEventListener('input', function(event) {

    var iban = dociment.getElementById("iban")
    const input = event.target;
    const regex_num = /[0-9]/;
    const regex_letter = /[a-z]/
    
if(iban.lenght<=2){
    if (!regex_letter.test(input.value)) {
        input.value = input.value.slice(0, -1);
        Toast.fire({
            icon: "warning",
            title: "Les deux premier charactère doivent être des lettres",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
        
    } else {
        input.setCustomValidity("");
    }
}else{
        if (!regex.test(input.value)) {
            input.value = input.value.slice(0, -1);
            input.setCustomValidity("Seuls les chiffres sont autorisés.");
            Toast.fire({
                icon: "warning",
                title: "A partir du troisième caractère seuls les chiffres sont autorisés.",
                background: '#F6F5EE',
                allowOutsideClick: false,
                customClass: {
                    title: 'generation_cle'
                },
            });
            
        } else {
            input.setCustomValidity("");
        }
    }

});
