var devisCree = false; // Initialisez-le à false au départ

document.getElementById("genererPDF").addEventListener("click", function () {


    // Configuration des options pour la génération du PDF
    const options = {
        margin: [0, 1], // Marge de 0 pour le haut et le bas, 10 mm pour la gauche et la droite
        filename: 'Mon_Devis.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    // Utilisation de html2pdf.js pour générer le PDF avec le formulaire
    const form = document.getElementById("myForm");
    devisCree = true;
    html2pdf().set(options).from(form).save().then(function (pdf) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_devis.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("devisCree=true");
        
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Réponse du serveur reçue
                // Vous pouvez effectuer d'autres actions ici, par exemple, afficher un message.
                console.log("PDF généré avec succès");
            }
        };
    });
});



/*
document.getElementById("genererPDF").addEventListener("click", function () {
    const options = {
        margin: [0, 1],
        filename: 'Mon_Devis.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    const form = document.getElementById("myForm");
    
    // Utilisation de html2pdf.js pour générer le PDF
    html2pdf().set(options).from(form).outputPdf(pdf => {
        // Créez un objet Blob contenant le PDF
        const blob = new Blob([pdf], { type: 'application/pdf' });

        // Déterminez l'emplacement de stockage de votre choix
        const storageLocation = '/home/etuinfo/rjacovetti/Documents/IUT/Semestre3/SAE/DevisToPDF/';

        // Créez un objet URL pour le Blob
        const url = URL.createObjectURL(blob);

        // Créez un lien de téléchargement avec le PDF
        const a = document.createElement('a');
        a.href = url;
        a.download = 'Mon_Devis.pdf';

        // Placez le lien de téléchargement dans votre emplacement de stockage
        a.style.display = 'none';
        document.body.appendChild(a);

        // Déclenchez le téléchargement
        a.click();

        // Libérez la ressource URL
        window.URL.revokeObjectURL(url);
    });
});
*/