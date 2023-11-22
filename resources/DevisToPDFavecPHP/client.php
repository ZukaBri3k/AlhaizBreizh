<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page du Client</title>
</head>
<body>
    <h1>Page du client</h1>
    <a href="proprio.php">Passer proprio</a>

    <?php
    // Vérifiez l'état du devis en lisant le contenu du fichier ou interrogeant la base de données
    $devisCree = file_get_contents("devis_state.txt"); // Exemple : lecture à partir d'un fichier texte
    if ($devisCree === 'true') :
    ?>
    <!-- Affichez cette partie uniquement si un devis a été créé -->
    <p>Accepter ou Refuser le devis :</p>
    <a href="javascript:void(0);" id="refuserDevis">Refuser le devis</a>
    <a href="javascript:void(0);" id="accepterDevis">accepter le devis</a>
    <?php endif; ?>
    
    <p>Télécharger PDF</p>
    <a href="Mon_Devis.pdf" download="Mon_Devis.pdf">Télécharger le PDF</a>
</body>
<script>
document.getElementById("refuserDevis").addEventListener("click", function () {
    // Effectuez ici toute action nécessaire, par exemple, enregistrez le refus du devis dans la base de données.
    // Redirigez ensuite l'utilisateur vers proprio.php avec un message.
    window.location.href = 'proprio.php?refus=1';
});
</script>
<script>
document.getElementById("accepterDevis").addEventListener("click", function () {
    // Effectuez ici toute action nécessaire, par exemple, enregistrez le refus du devis dans la base de données.
    // Redirigez ensuite l'utilisateur vers proprio.php avec un message.
    window.location.href = 'proprio.php?accept=1';
});
</script>

</html>
