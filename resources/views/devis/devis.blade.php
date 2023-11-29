<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PDF</title>
    <link rel="stylesheet" href="{{asset('css/styleD.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>
        <x-Navbar></x-Navbar>
    </header>
    <section class="hautDePage">
        <div class="spacer"></div>
                <a class="retour" href="proprio.php">
            <div>
                <img src="img/retour.png" alt="retour" alt="retour" classe="retour" width="70%" height="70%">
            </div>
            <p>Retour</p>
        </a>
        <h2>Créer votre devis</h2>
        <div class="spacer"></div>
    </section>
    <section class="devis">
        <img src="img/grandlogo.png" alt="grandlogo" alt="grandlogo" classe="grandlogo" width="30%">
        <div class="boxhaut">
            <div class="boxgauche">
                <h3>Nom du propriétaire</h3>
                <p>Adresse du propriétaire</p>
                <p>ville, code postal, France</p>
                <p>Numéro de téléphone</p>
                <p>Adresse mail</p>
                <div class="espace"></div>
                <p>Date de début du séjour : <input type="date" id="startDate" class="date-input" min="2023-01-01" max="2030-12-31"></p>
                <p>Date de fin du séjour : <input type="date" id="endDate" class="date-input" min="2023-01-01" max="2030-12-31"></p>
            </div>
            <div class="boxdroite">
                <h3>Devis</h3>
                <p>Numéro du devis : <span class="greyText">D-2023-001</span></p>
                <p>Date d'émission du devis : 01/01/2023</p>
                <p>Date d'expiration du devis : 01/02/2023</p>
                <p>Conditions d'annulation de la réservation</p>
                <br>
                <h3>Client</h3>
                <label for="name">Nombre de personnes :</label>
                <select id="name" name="name">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <br>
                <label for="name">Heure d'arrivée :</label>
                <input type="text" id="name" name="user_name" />
                <label for="name">Heure de départ :</label>
                <input type="text" id="name" name="user_name" />
                <label for="name">pays :</label>
                <input type="text" id="name" name="user_name" />
            </div>
        </div>
        <table border="1" class="table-striped">
            <tr>
                <td>Tarif location HT</td>
                <td class="table-left-shift"><input type="text" id="tariflocht" name="user_name"/></td>
            </tr>
            <tr>
                <td>Charges HT</td>
                <td><input type="text" id="chargesht" name="user_name"/></td>
            </tr>
            <tr>
                <td>Sous total HT</td>
                <td><input type="text" id="soustotalht" name="user_name"/></td>
            </tr>
            <tr>
                <td>Sous total TTC</td>
                <td><input type="text" id="soustotalttc" name="user_name"/></td>
            </tr>
            <tr>
                <td>Taxe de séjour</td>
                <td><input type="text" id="taxedesejour" name="user_name"/></td>
            </tr>
        </table>
        <div class="boxbasdroite">
        <p id="fraisservicettc">Frais de service TTC : </p>
        <p id="fraisserviceht">Frais de service HT : </p>
        <h3 id="prixtotal">Prix total : </h3>
        </div>
        <div class="boxbasgauche">
            <p>délai d'acceptation :</p>
            <select id="conditionsPaiement" name="conditionsPaiement">
                <option value="option1">1 jours</option>
                <option value="option2">2 jours</option>
                <option value="option1">3 jours</option>
                <option value="option2">4 jours</option>
            </select>

            <p>Moyens de paiement :</p>
            <select id="moyensPaiement" name="moyensPaiement">
                <option value="carte">Carte de crédit</option>
                <option value="cheque">Chèque</option>
                <option value="virement">Virement bancaire</option>
            </select>
        </div>
        <button type="button" id="genererPDF">Générer PDF</button>
    </section>
    <footer>
        <x-FooterClient></x-FooterClient>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Constantes
            const tauxTVA = 0.20;

            function updateTotals() {
                var tariflochtInput = document.getElementById('tariflocht');
                var chargeshtInput = document.getElementById('chargesht');
                var soustotalhtInput = document.getElementById('soustotalht');
                var soustotalttcInput = document.getElementById('soustotalttc');
                var fraisservicettcElement = document.getElementById('fraisservicettc');
                var fraisservicehtElement = document.getElementById('fraisserviceht');
                var prixtotalElement = document.getElementById('prixtotal');
                var taxedesejourInput = document.getElementById('taxedesejour');

                // Validation des champs de saisie
                var tarifLocHT = parseFloat(tariflochtInput.value) || 0;
                var chargesHT = parseFloat(chargeshtInput.value) || 0;
                var taxedesejour = parseFloat(taxedesejourInput.value) || 0;

                // Calculs
                var soustotalht = tarifLocHT + chargesHT;
                var soustotalttc = soustotalht * (1 + tauxTVA);

                // Mise à jour des champs
                soustotalhtInput.value = soustotalht.toFixed(2);
                soustotalttcInput.value = soustotalttc.toFixed(2);

                fraisservicettcElement.textContent = 'Frais de service TTC : ' + ((soustotalht * 0.01) * (1 + tauxTVA)).toFixed(2);
                fraisservicehtElement.textContent = 'Frais de service HT : ' + (soustotalht * 0.01).toFixed(2);
                prixtotalElement.textContent = 'Prix total : ' + (taxedesejour + ((soustotalht * 0.01) * (1 + tauxTVA)) + soustotalttc).toFixed(2);
            }

            var tariflochtInput = document.getElementById('tariflocht');
            var chargeshtInput = document.getElementById('chargesht');
            var soustotalhtInput = document.getElementById('soustotalht');
            var taxedesejourInput = document.getElementById('taxedesejour');

            tariflochtInput.addEventListener('input', updateTotals);
            chargeshtInput.addEventListener('input', updateTotals);
            taxedesejourInput.addEventListener('input', updateTotals);

            updateTotals();
        });
    </script>
</body>
</html>    
