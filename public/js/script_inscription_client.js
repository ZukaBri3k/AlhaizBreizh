document.getElementById("password").addEventListener("blur", verifierMotDePasse);
document.getElementById("confirmerMotDePasse").addEventListener("blur", verifierMotDePasse);

	function verifierMotDePasse() {

		var motDePasse = document.getElementById("password").val();
		var confirmationMotDePasse = document.getElementById("confirmerMotDePasse").val();
		console.log(motDePasse);
		console.log(confirmationMotDePasse)
	
		if (motDePasse === confirmationMotDePasse) {
			alert("Les mots de passe correspondent.");
		} else {
			alert("Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.");
		}
	}