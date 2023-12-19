<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/inscription.css')}}">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

<x-Navbar></x-Navbar>
<main>
    <h1>Inscription propriétaire</h1>
    <div class="wrapper">
        <div class="gauche" >
            <div class="public-info-section">
            <h1>Infomation personnel public</h1>
            <form action="{{route('proprio_register')}}" method="get">
                <div class="radio-container">
        
                <select id="genre" >
                    <option selected>Genre</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Non préscisé">Non préscisé</option>
                  </select>
        
                  <select id="civilite_pers" name="civilite_pers"><br>
                    <option selected>civilite</option>
                    <option class="lt" value="--">none</option>
                    <option value="M">M.</option>
                    <option value="MME">MME.</option>
                  </select>
        
        
                <br><br>
                </div>
        
                <br><br>
        
        
        
                <label for="nom_pers"></label>
                <input type="text" id="nom_pers" name="nom_pers" placeholder="Nom*" required>
        
                <label for="prenom_pers"></label>
                <input type="text" id="prenom_pers" name="prenom_pers" placeholder="Prenom* " required>
                <br></br>
        
                
                <label for="pseudo_pers"></label>
                <input type="text" id="pseudo_pers" name="pseudo_pers" placeholder="Pseudo*" required>
        
                <label for="ville_pers"></label>
                <input type="text" id="ville_pers" name="ville_pers" placeholder="Ville* " required>
                <br></br>
        
                <label for="pays_pers"></label>
                <input type="text" id="pays_pers" name="pays_pers   " placeholder="Pays* " required>
                <br></br>
        
                <label for="photo_pers">Inserer une Photo de profil* :</label>
                <input type="file" id="photo_pers" width="20%" name="photo_pers" accept="image/*">
                <br><br>
            </div>
        
            <div class="messages_prop_devis" >
        
                <h1>Messages automatique</h1>
        
                <h3>Messages proposition de devis</h3>
            
         
                <label for="nom_client_proposition_devis"></label>
                <input type="text" name="nom_client_proposition_devis" id="nom_client_proposition_devis" placeholder="Bonjour Monsieur/Madame">
                <p>[nom Client]</p>
                <br></br>
        
                <label for="nom_logement_proposition_devis"></label>
                <textarea type="text" name="nom_logement_proposition_devis" class="prep_message" id="nom_logement_proposition_devis" maxlength="500" spellcheck="true" rows="10" column="10" placeholder="Je souhaiterais réserver le logement.      J’aimerais savoir si c’est possible d’avoir un devis."></textarea>
                <div class="counter"><span id="ton_compteur" >0</span>\500</div><p>[nom logement]</p>
                    <br></br>  
        
                <label for="votre_nom_proposition_devis"></label>
                <input type="text" name="votre_nom_proposition_devis" id="votre_nom_proposition_devis" placeholder="Cordialement,
                Bonne journée">
                <p>[votre nom]</p>
                <br></br>
                </div>  
            </div>
                
                
           <div class="private-info-section">    
           <h6><a href="{{route ('inscription_client')}}"> je me suis trompé je souhaite créer un compte Client</a>
                    <h1>Information personnel privée</h1>
        
                <label for="adresse_pers"></label> 
                <input type="text" id="adresse_pers" name="adresse_pers" placeholder="Adresse*" required>
                <br></br>
        
                <label for="code_postal_pers"></label>
                <input type="number" name="code_postal_pers" id="code_postal_pers" placeholder="code postal*" required>
                <br></br>

                <label for="date_de_naissance"></label>
                <input type="date" id="date_de_naissance" name="date_de_naissance" placeholder="Date de date de naissance*" required>
                <br></br>
        
                <label for="telephone_pers"></label>
                <input type="tel" id="telephone_pers" name="telephone_pers" placeholder="Telephone*" required>
                <br><br>
        
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="Mot de passe *" required>
                <br><br>
                
                <label for="confirmerMotDePasse"></label>
                <input type="password" id="confirmerMotDePasse" name="confirmerMotDePasse" placeholder="confirmer Mot De Passe*"  required>
                <br><br>
                <label for="iban"></label>
                <input type="number" id="iban" name="iban" placeholder="iban">
                <br></br>
        
                <label for="mail_pers"></label>
                <input type="email" id="mail_pers" name="mail_pers" placeholder="email*" required>
                <br><br>
        
                <label for="piece_id_proprio_recto">Inserer une Photo de profil* :</label>
                <input type="file" id="piece_id_proprio_recto" name="piece_id_proprio_recto" accept="image/*">
                <br><br>
        
                <label for="piece_id_proprio_verso">Inserer une Photo de profil* :</label>
                <input type="file" id="piece_id_proprio_verso" name="piece_id_proprio_verso" accept="image/*">
                <br><br>
        
            </div>
    </div>

       

        <input type="submit" value="S'inscrire">
    </main>
        <footer>

        </footer>
    </form>
</body>
</html>