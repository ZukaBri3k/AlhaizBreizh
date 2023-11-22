<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'accept') {
        // Le client a accepté le devis, vous pouvez traiter cette action ici.
        // Par exemple, enregistrer la réponse dans une base de données.
        $message = "Le client a accepté le devis.";
    } elseif ($_GET['action'] == 'refuse') {
        // Le client a refusé le devis, vous pouvez également traiter cette action.
        // Par exemple, enregistrer la réponse dans une base de données.
        $message = "Le client a refusé le devis.";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page du Proprio</title>
</head>
<body>
    <h1>Page du Proprio</h1>
    <p><?php echo isset($message) ? $message : ''; ?></p>
    <a href="client.php">Revenir à la page du client</a>
    <p>Créer mon devis</p>
    <a href="index.php">Créer mon devis</a>
    <?php
    if (isset($_GET['refus']) && $_GET['refus'] == 1) {
        echo "Le client a refusé le devis.";
    }
    ?>
    <?php
    if (isset($_GET['accept']) && $_GET['accept'] == 1) {
        echo "Le client a accepté le devis.";
    }
    ?>
</body>
</html>
