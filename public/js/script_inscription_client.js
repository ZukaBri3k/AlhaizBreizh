
document.getElementById("nom_logement_acceptation").onkeyup = function(){ 
	document.getElementById("ton_compteur_accept_devis").innerHTML = document.getElementById("nom_logement_acceptation").value.length; 
}

document.getElementById("nom_logement_acceptation").onkeydown = function(){ 
	document.getElementById("ton_compteur_accept_devis").innerHTML = document.getElementById("nom_logement_acceptation").value.length; 
}

document.getElementById("nom_logement_refus").onkeyup = function(){ 
	document.getElementById("ton_compteur_refus_devis").innerHTML = document.getElementById("nom_logement_refus").value.length; 
}

document.getElementById("nom_logement_refus").onkeydown = function(){ 
	document.getElementById("ton_compteur_refus_devis").innerHTML = document.getElementById("nom_logement_refus").value.length; 
}

document.getElementById("nom_logement_demande_devis").onkeyup = function(){ 
	document.getElementById("ton_compteur_demande_devis").innerHTML = document.getElementById("nom_logement_demande_devis").value.length; 
}

document.getElementById("nom_logement_demande_devis").onkeydown = function(){ 
	document.getElementById("ton_compteur_demande_devis").innerHTML = document.getElementById("nom_logement_demande_devis").value.length; 
}

