
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
console.log(document.getElementById("confirmerMotDePasse"));
	function verifierMotDePasse() {
		console.log("ici");

		var motDePasse = document.getElementById("password").value;
        var confirmationMotDePasse = document.getElementById("confirmerMotDePasse").value;
		
	
		if (motDePasse != confirmationMotDePasse && confirmationMotDePasse != null) {
			alert("Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.");
		}
	}