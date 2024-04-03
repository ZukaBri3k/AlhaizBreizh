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

                        document.getElementById('id-card').addEventListener('change', function () {
                            var fileInput = this;
                            var file = fileInput.files[0];

                            if (file) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    var previewElement = document.getElementById('id-card-preview');
                                    previewElement.innerHTML = '<img src="' + e.target.result + '" alt="ID Card Preview" style="max-width: 100%;">';

                                    var fileName = fileInput.value.split('\\').pop();
                                    var message = "Carte d'Identité enregistrée : " + fileName;

                                    document.getElementById('id-card-message').innerText = message;
                                };

                                reader.readAsDataURL(file);
                            }
                        });

        document.getElementById("confirmerMotDePasse").addEventListener("blur", verifierMotDePasse);

	function verifierMotDePasse() {

		var motDePasse = document.getElementById("password").value;
        var confirmationMotDePasse = document.getElementById("confirmerMotDePasse").value;
		
	
		if (motDePasse != confirmationMotDePasse && confirmationMotDePasse != "") {
			alert("Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.");
		}
    } 