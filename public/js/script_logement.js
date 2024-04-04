const boutton_suivant_page_1 = document.getElementById("suivant_page_1");

boutton_suivant_page_1.addEventListener("click", page_1_to_page_2);
document.getElementById("retour_page_2").addEventListener("click", page_2_to_page_1);
document.getElementById("retour_page_3").addEventListener("click", page_3_to_page_2);
document.getElementById("retour_page_4").addEventListener("click", page_4_to_page_3);
document.getElementById("retour_page_5").addEventListener("click", page_5_to_page_4);
document.getElementById("retour_page_6").addEventListener("click", page_6_to_page_5);
document.getElementById("retour_page_7").addEventListener("click", page_7_to_page_6);
document.getElementById("retour_page_8").addEventListener("click", page_8_to_page_7);
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
function page_1_to_page_2() {        
    document.getElementById("page_1").style.display = 'none';
    document.getElementById("page_2").style.display = 'flex';
}

function page_2_to_page_1() {
    document.getElementById("page_2").style.display = 'none';
    document.getElementById("page_1").style.display = 'block';
}

function page_2_to_page_3() {
        
        Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
   // });
    document.getElementById("page_2").style.display = 'none';
    document.getElementById("page_3").style.display = 'flex';
}



function page_3_to_page_2(){
    document.getElementById("page_3").style.display = 'none';
    document.getElementById("page_2").style.display = 'flex';
}
function page_4_to_page_3(){
    document.getElementById("page_4").style.display = 'none';
    document.getElementById("page_3").style.display = 'flex';
}
function page_4_to_page_5(){
         Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    document.getElementById("page_4").style.display = 'none';
    document.getElementById("page_5").style.display = 'flex';
}
function page_5_to_page_4(){
    document.getElementById("page_5").style.display = 'none';
    document.getElementById("page_4").style.display = 'block';
}
function page_5_to_page_6(){
        Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    document.getElementById("page_5").style.display = 'none';
    document.getElementById("page_6").style.display = 'flex';
}
function page_6_to_page_5(){
    document.getElementById("page_6").style.display = 'none';
    document.getElementById("page_5").style.display = 'flex';
}
function page_6_to_page_7(){
         Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    document.getElementById("page_6").style.display = 'none';
    document.getElementById("page_7").style.display = 'flex';
}
function page_7_to_page_8(){
        Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    document.getElementById("page_7").style.display = 'none';
    document.getElementById("page_8").style.display = 'flex';
}
function page_7_to_page_6(){
    document.getElementById("page_7").style.display = 'none';
    document.getElementById("page_6").style.display = 'flex';
}
function page_8_to_page_7(){
    document.getElementById("page_8").style.display = 'none';
    document.getElementById("page_7").style.display = 'flex';
}


function page_3_to_page_4() {
    const nombreDeChambres = parseInt(document.getElementById("nombre_de_chambre_input").value);
    const chambresContainer = document.getElementById("chambres_container");
    chambresContainer.innerHTML = '';

    for (let i = 1; i <= nombreDeChambres; i++) {
        const chambreDiv = document.createElement('div');
        const titreChambre = document.createElement('h4');
        titreChambre.innerText = `Chambre ${i}`;
        const breakline = document.createElement('br');
        const breakline2 = document.createElement('br');
        chambreDiv.appendChild(titreChambre);
        const labelLitsSimples = document.createElement('label');
        labelLitsSimples.style.opacity = '50%';
        labelLitsSimples.innerText = 'Nombre de lits simples :';
        chambreDiv.appendChild(labelLitsSimples);

        const nombreLitsSimples = document.createElement('input');
        nombreLitsSimples.type = 'text';
        nombreLitsSimples.id = `chambres_container_${i}_lits_simples`;
        nombreLitsSimples.style.borderRadius = '6px';
        nombreLitsSimples.style.height = '30px';
        nombreLitsSimples.style.width = '50px';
        nombreLitsSimples.style.border = 'none';
        nombreLitsSimples.style.marginBottom = '15px';
        chambreDiv.appendChild(nombreLitsSimples);
        chambreDiv.appendChild(breakline);

        const labelLitsDoubles = document.createElement('label');
        labelLitsDoubles.style.opacity = '50%';
        labelLitsDoubles.innerText = 'Nombre de lits doubles :';
        chambreDiv.appendChild(labelLitsDoubles);

        const nombreLitsDoubles = document.createElement('input');
        nombreLitsDoubles.type = 'text';
        nombreLitsDoubles.id = `chambres_container_${i}_lits_doubles`;
        nombreLitsDoubles.style.borderRadius = '6px';
        nombreLitsDoubles.style.height = '30px';
        nombreLitsDoubles.style.width = '50px';
        nombreLitsDoubles.style.border = 'none';
        nombreLitsDoubles.style.marginBottom = '15px';
        chambreDiv.appendChild(nombreLitsDoubles);
        chambreDiv.appendChild(breakline2);

        const labelDetailLits = document.createElement('label');
        labelDetailLits.style.opacity = '50%'
        labelDetailLits.innerText = 'Détails des lits disponibles :'
        chambreDiv.appendChild(labelDetailLits);

        const detailsLits = document.createElement('textarea');
        detailsLits.id = `chambres_container_${i}_details_lits`;
        detailsLits.placeholder = 'Saisissez ici (255 caractères max)';
        detailsLits.style.resize = 'none';
        detailsLits.style.Width = '400px';
        detailsLits.style.Height = '50px';
        chambreDiv.appendChild(detailsLits);

        chambresContainer.appendChild(chambreDiv);
    }

    document.getElementById("page_3").style.display = 'none';
    document.getElementById("page_4").style.display = 'block';
    let hauteurPage = document.getElementById("page_4").offsetHeight;
    hauteurPage += 75;
    document.getElementById("page_4").style.height = document.getElementById("page_4").offsetHeight + hauteurPage + 'px';
}




function createLabelAndInput(labelText, inputId) {
    const label = document.createElement('label');
    label.textContent = labelText;

    const input = document.createElement('input');
    input.type = 'text';
    input.id = inputId;

    return [label, input];
}

function createLabelAndTextarea(labelText, textareaId) {
    const label = document.createElement('label');
    label.textContent = labelText;
    label.style.verticalAlign = 'top';
    const textarea = document.createElement('textarea');
    textarea.id = textareaId;

    return [label, textarea];
}
function selectItem(button, inputId) {
    var buttons = document.querySelectorAll('.image-button');
    buttons.forEach(function(btn) {
        btn.classList.remove('selected');
    });
    button.classList.add('selected');
    var selectedHousingInput = document.getElementById(inputId);
    selectedHousingInput.value = button.value;
    var suivantButton = document.getElementById('suivant_page_2');
    suivantButton.disabled = !selectedHousingInput.value;
}

function validateForm() {
    var selectedHousingInput = document.getElementById('selectedHousing');
    if (!selectedHousingInput.value) {
                Swal.fire({
            icon: "error",
            title:"Erreur",
            text:"Veuillez sélectionner une nature de logement",
            background: '#F6F5EE',
            allowOutsideClick: false,
        });
        return;
    }

    var selectedSizeInput = document.getElementById('selectedSize1');
    if (!selectedSizeInput.value) {
                Swal.fire({
            icon: "error",
            title:"Erreur",
            text:"Veuillez sélectionner un type de logement",
            background: '#F6F5EE',
            allowOutsideClick: false,
        });
        return;
    }
    page_2_to_page_3(); 
}
function validatePage3() {
    const adresse = document.getElementsByName('adresse_logement')[0].value;
    const ville = document.getElementsByName('ville_logement')[0].value;
    const codePostal = document.getElementsByName('code_postal_logement')[0].value;
    const titreLogement = document.getElementsByName('libelle_logement')[0].value;
    const accrocheLogement = document.getElementsByName('accroche_logement')[0].value;
    const descriptionLogement = document.getElementById('description_logement_input').value;
    const nombrePersonne = document.getElementsByName('nb_personne_max')[0].value;
    const surface = document.getElementsByName('surface_habitable_logement')[0].value;
    const nombreChambre = document.getElementsByName('nb_chambre_logement')[0].value;
    const nombreSalleDeBain = document.getElementsByName('nb_salle_de_bain_logement')[0].value;

    // Vérifiez si tous les champs sont remplis
    if (
        adresse.trim() === '' ||
        ville.trim() === '' ||
        codePostal.trim() === '' ||
        titreLogement.trim() === '' ||
        accrocheLogement.trim() === '' ||
        descriptionLogement.trim() === '' ||
        nombrePersonne.trim() === '' ||
        surface.trim() === '' ||
        nombreChambre.trim() === '' ||
        nombreSalleDeBain.trim() === ''
    ) {
        Swal.fire({
            icon: "error",
            title:"Erreur",
            text:"Veuillez remplir tous les champs obligatoires",
            background: '#F6F5EE',
            allowOutsideClick: false,
        });
            
        return false;
    }
        Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    page_3_to_page_4();
}

function validatePage4() {
    const nombreDeChambres = parseInt(document.getElementById("nombre_de_chambre_input").value);
    let valeursChambres = '';

    for (let i = 1; i <= nombreDeChambres; i++) {
        const nombreLitsSimples = document.getElementById(`chambres_container_${i}_lits_simples`).value;
        const nombreLitsDoubles = document.getElementById(`chambres_container_${i}_lits_doubles`).value;
        const detailsLits = document.getElementById(`chambres_container_${i}_details_lits`).value;
        
        // Vérifier si tous les champs sont remplis
        if (
            nombreLitsSimples.trim() === '' ||
            nombreLitsDoubles.trim() === '' ||
            detailsLits.trim() === ''
        ) {
                    Swal.fire({
            icon: "error",
            title:"Erreur",
            text:"Veuillez remplir les champs de toutes les chambres",
            background: '#F6F5EE',
            allowOutsideClick: false,
        });
            return false;
        }

        // Ajouter les valeurs de la chambre à la chaîne valeursChambres
        valeursChambres += `${nombreLitsSimples},${nombreLitsDoubles},${detailsLits};`;
    }

    // Mettre à jour la valeur du champ input hidden avec les valeurs des chambres
    document.getElementById("valeurs_chambres_hidden").value = valeursChambres;
    
    // Passer à la page suivante
    page_4_to_page_5();
}


function selectItem_droite(button, inputId) {
    const allButtons = document.querySelectorAll('#droite_page_2 .image-button');
    if (button.classList.contains('selected')) {
        button.classList.remove('selected');
        button.style.backgroundColor = '';
        document.getElementById(inputId).value = '';
    } else {
        allButtons.forEach(otherButton => {
            otherButton.classList.remove('selected');
            otherButton.style.backgroundColor = '';
        });

        button.classList.add('selected');
        button.style.backgroundColor = '#4BCBFF';
        document.getElementById(inputId).value = button.value;
    }
}

function selectItemGauche(button, inputId) {
    const isSelected = button.classList.toggle('selected');
    const backgroundColor = isSelected ? '#4BCBFF' : '';

    button.style.backgroundColor = backgroundColor;
    document.getElementById(inputId).value = isSelected ? button.value : '';
}



function selectItemDroite(button, inputId) {
    const isSelected = button.classList.toggle('selected');
    const backgroundColor = isSelected ? '#4BCBFF' : '';

    button.style.backgroundColor = backgroundColor;
    document.getElementById(inputId).value = isSelected ? button.value : '';
}
function savePage5Data() {
    var buttonsGauche = document.querySelectorAll('#gauche_page_5 .image-button.selected');
    var buttonsDroite = document.querySelectorAll('#droite_page_5 .image-button.selected');
    
    var selectedValuesGauche = [];
    buttonsGauche.forEach(function(button) {
        selectedValuesGauche.push(button.value);
    });
    document.getElementById('selectedPage5ValuesGauche').value = selectedValuesGauche.join(';');

    var selectedValuesDroite = [];
    buttonsDroite.forEach(function(button) {
        selectedValuesDroite.push(button.value);
    });
    document.getElementById('selectedPage5ValuesDroite').value = selectedValuesDroite.join(';');

    page_5_to_page_6();
}

function savePage6Data() {
    var buttonsGauche = document.querySelectorAll('#gauche_page_6 .image-button.selected');
    var buttonsDroite = document.querySelectorAll('#droite_page_6 .image-button.selected');
    
    var selectedValuesGauche = [];
    buttonsGauche.forEach(function(button) {
        selectedValuesGauche.push(button.value);
    });
    document.getElementById('selectedPage6ValuesGauche').value = selectedValuesGauche.join(';');

    var selectedValuesDroite = [];
    buttonsDroite.forEach(function(button) {
        selectedValuesDroite.push(button.value);
    });
    document.getElementById('selectedPage6ValuesDroite').value = selectedValuesDroite.join(';');

    page_6_to_page_7();
}


function validatePage7() {
    const prixParNuit = document.getElementById('input_page_7').value;
    if (prixParNuit.trim() === '') {
                Swal.fire({
            icon: "error",
            title:"Erreur",
            text:"Veuillez saisir le prix par nuits",
            background: '#F6F5EE',
            allowOutsideClick: false,
        });
        return false;
    }
    page_7_to_page_8();
}
function savePage7Data() {
    var buttonsGauche = document.querySelectorAll('#gauche_page_7 .image-button.selected');
    var selectedValuesGauche = [];

    buttonsGauche.forEach(function (button) {
        selectedValuesGauche.push(button.value);
    });

    document.getElementById('selectedPage7ValuesGauche').value = selectedValuesGauche.join(';');
}

function displaySelectedImage(imageNumber) {
    const input = document.getElementById(`image-upload${imageNumber}`);
    const selectedImage = document.getElementById(`selected-image${imageNumber}`);

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            selectedImage.innerHTML = `<img src="${e.target.result}" alt="Selected Image">`;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function saveAndSubmitForm() {
             Toast.fire({
            icon: "success",
            title: "Informations enregistrées",
            background: '#F6F5EE',
            allowOutsideClick: false,
            customClass: {
                title: 'generation_cle'
            },
        });
    const imageForm = document.getElementById("selectedHousing");
    imageForm.submit();
}



function selectItemGauche_page_6(button, inputId) {
    const isSelected = button.classList.toggle('selected');
    const backgroundColor = isSelected ? '#4BCBFF' : '';

    button.style.backgroundColor = backgroundColor;
    document.getElementById(inputId).value = isSelected ? button.value : '';
}
function selectItemDroite_page_6(button, inputId) {
    const isSelected = button.classList.toggle('selected');
    const backgroundColor = isSelected ? '#4BCBFF' : '';

    button.style.backgroundColor = backgroundColor;
    document.getElementById(inputId).value = isSelected ? button.value : '';
}

function selectItemGauche_page_7(button, inputId) {
    const isSelected = button.classList.toggle('selected');
    const backgroundColor = isSelected ? '#4BCBFF' : '';

    button.style.backgroundColor = backgroundColor;
    document.getElementById(inputId).value = isSelected ? button.value : '';
}

/*const imageUploads = document.querySelectorAll('.image-upload');
    imageUploads.forEach((upload, index) => {
      upload.addEventListener('change', () => handleImageUpload(index + 1));
    });*/

  /*  function handleImageUpload(uploadIndex) {
      const selectedImage = document.getElementById(`selected-image${uploadIndex}`);
      const fileName = imageUploads[uploadIndex - 1].files[0].name;
      selectedImage.textContent = `Image sélectionnée : ${fileName}`;
    }
*/
