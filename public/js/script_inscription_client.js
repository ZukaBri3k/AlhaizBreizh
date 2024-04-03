
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
	
		if (motDePasse != confirmationMotDePasse && confirmationMotDePasse != "") {
			alert("Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.");
		}
	}

    document.getElementById("telephone_pers").addEventListener(onkeydownn,validerNumero);

    function validerNumero() {
        var numero = document.getElementById("telephone_pers").value;
        var regex = /^\d+$/;

        if (regex.test(numero)) {
            // Le numéro est valide
            return true;
        } else {
            // Le numéro n'est pas valide
            alert("Veuillez entrer uniquement des chiffres dans le champ du numéro de téléphone.");
            return false;
        }
    }