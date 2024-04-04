
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


    function verifierMajuscule(motDePasse) {
        // Vérifier si le mot de passe contient au moins une majuscule
        var regex_maj = /[A-Z]/;
        var regex_min = /[a-z]/;
        var regex_chiffre = /[0-9]/;
        var MDP = document.getElementById("password").value;
        if (MDP.match(regex_maj)){
            if(MDP.match(regex_min)){
                if(MDP.match(regex_chiffre)){

                }
                else{
                    alert("il vous manque un chiffre");
                }
            }
            else{
                alert("Il vous manque une minuscule");
            }

        }else{
            alert("Il vous manque une Majuscule");
        }
        
    }
    
