document.getElementById("password").addEventListener("blur", verifierMotDePasse);
document.getElementById("confirmerMotDePasse").addEventListener("blur", verifierMotDePasse);

	function verifierMotDePasse() {
		var motDePasse = document.getElementById("password").value;
		var confirmationMotDePasse = document.getElementById("confirmerMotDePasse").value;
	
		if (motDePasse === confirmationMotDePasse) {
			alert("Les mots de passe correspondent.");
		} else {
			alert("Les mots de passe ne correspondent pas. Veuillez les saisir à nouveau.");
		}
	}