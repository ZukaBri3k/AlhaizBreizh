<?php
if (isset($_POST['devisCree']) && $_POST['devisCree'] === 'true') {
    // Mettez à jour l'état du devis, par exemple, enregistré dans une base de données.
    // Vous pouvez également enregistrer l'état du devis dans un fichier, selon vos besoins.

    // Exemple : sauvegarde dans un fichier texte
    file_put_contents("devis_state.txt", "true");

    // Répondre à la requête AJAX
    echo "Devis mis à jour avec succès.";
} else {
    // En cas de requête invalide
    echo "Requête invalide.";
}
?>