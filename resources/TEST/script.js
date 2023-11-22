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
    html2pdf().set(options).from(form).save();
});
