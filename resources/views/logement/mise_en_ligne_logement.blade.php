<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de logement</title>
    <link rel="stylesheet" href="{{asset('css/style_logement.css')}}">
</head>

<body>
    <x-navbar></x-navbar>
    <div id="page_1" class="page">
        <div id="texte_page_1" >
            <h2 class="texte_justifie">Dites nous tout sur votre logement !</h2>
            <br>   
            <p class="texte_justifie">Au cours de cette phase, nous vous interrogerons sur le type d'hébergement <br>que vous proposez, ainsi que sur la possibilité pour les voyageurs de le <br> réserver dans son intégralité. 
                Par la suite, nous vous demanderons de <br>spécifier l'emplacement 
                géographique et la capacité d'accueil de <br>l'hébergement.</p>
        </div>
       
            <div id="footer">
                <button  type="button" id="retour_page_1" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
                <button  type="button" id="suivant_page_1" class="bouttons_suivant">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
            </div>
    </div>
    <form action="{{route('mise_en_ligne_logement')}}" method="post" id="selectedHousing" enctype="multipart/form-data" >
    @csrf
    <div id="page_2" class="page"> 
        <div id="gauche_page_2">
                <h3 id="titre_colonne_gauche_page_2">De quel nature est votre logement ? *</h3>
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Maison">
                        <div class="image-container">
                            <img src="{{asset('img/nature/maison.png')}}" alt="Maison">
                        </div>
                        <span>Maison</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Appartement">
                        <div class="image-container">
                            <img src="{{asset('img/nature/appartement.png')}}" alt="Appartement">
                        </div>
                        <span>Appartement</span>
                    </button>
                </div>
            
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection"  value="Villa d'exception">
                        <div class="image-container">
                            <img src="{{asset('img/nature/villa.png')}}" alt="Villa d'exception">
                        </div>
                        <span>Villa d'exception</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Bateau">
                        <div class="image-container">
                            <img src="{{asset('img/nature/bateau.png')}}" alt="Bateau">
                        </div>
                        <span>Bateau</span>
                    </button>
                </div>
            
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Chambre d'hôte">
                        <div class="image-container">
                            <img src="{{asset('img/nature/chambre_hote.png')}}" alt="Chambre d'hôte">
                        </div>
                        <span>Chambre d'hôte</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Maison d'hôte">
                        <div class="image-container">
                            <img src="{{asset('img/nature/maison_hote.png')}}" alt="Maison d'hôte">
                        </div>
                        <span>Maison d'hôte</span>
                    </button>
                </div>
            
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Cabane">
                        <div class="image-container">
                            <img src="{{asset('img/nature/cabane.png')}}" alt="Cabane">
                        </div>
                        <span>Cabane</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection" value="Caravane">
                        <div class="image-container">
                            <img src="{{asset('img/nature/caravane.png')}}" alt="Caravane">
                        </div>
                        <span>Caravane</span>
                    </button>
                </div>
                <input type="hidden" id="selectedHousing" name="nature_logement" value=""  >
        </div>
        <div id="droite_page_2">
            
            <h3>De quel type est votre logement ?*</h3>
            <br>
            <div id="t1-t2">

                <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="t1">
                    <div class="image-container">
                        <img src="{{asset('img/type/t1.png')}}" alt="T1">
                    </div>
                    <span>T1</span>
                </button>
                <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="t2">
                    <div class="image-container">
                        <img src="{{asset('img/type/t2.png')}}" alt="T2">
                    </div>
                    <span>T2</span>
                </button>
            </div>
            <div id="t3-t4">
                <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="t3">
                    <div class="image-container">
                        <img src="{{asset('img/type/t3.png')}}" alt="T3">
                    </div>
                    <span>T3</span>
                </button>
                <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="t4">
                    <div class="image-container">
                        <img src="{{asset('img/type/t4.png')}}" alt="T4">
                    </div>
                    <span>T4</span>
                </button>
            </div>
            <div id="studio-duplex">
                <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="studio">
                    <div class="image-container">
                        <img src="{{asset('img/type/studio.png')}}" alt="Studio">
                    </div>
                    <span>Studio</span>
                </button>
                <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="duplex">
                    <div class="image-container">
                        <img src="{{asset('img/type/duplex.png')}}" alt="Duplex">
                    </div>
                    <span>Duplex</span>
                </button>

            </div>
            <button type="button" onclick="selectItem_droite(this, 'selectedSize')" class="image-button boutton_selection" value="triplex" id="triplex">
                <div class="image-container">
                    <img src="{{asset('img/type/triplex.png')}}" alt="Triplex">
                </div>
                <span>Triplex</span>
            </button>
        </div>

        <input type="hidden" id="selectedSize" name="type_logement" value="">
        <div id="footer">
            <button  type="button" id="retour_page_2" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
            <button  type="button" onclick="validateForm()"id="suivant_page_2" class="bouttons_suivant" >Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
        </div>
    
    </div>

    <div id="page_3" class="page">
        <div id="colonne_gauche_page_3">
          
            <div id="location_logement">
                <h3>Où se situe votre logement ?*</h3>
                <input type="text" placeholder="votre adresse" name="adresse_logement" required>
                <br>
                <input type="text" placeholder="Saisissez votre ville" name="ville_logement" required>
                <br>
                <input type="text" placeholder="Code postal" name="code_postal_logement" required>
                <br>
            </div>

            <div id="titre_logement">
                <h3>Quel sera le titre du logement ?*</h3>
                <input type="text" name="libelle_logement" placeholder="Saisissez le libellé du logement" required>
                <br>
                <input type="text" name="accroche_logement" placeholder="Saisissez l'accroche du logement" required>
            </div>

        </div>
        <div id="colonne_droite_page_3">
            <h3>Décrivez-nous votre logement *</h3>
            <div id="description_logement">
                <textarea id="description_logement_input"  name="descriptif_logement" rows="4" cols="50" required></textarea>
                <div id="description_logement_precise">
                    <div id="nombre_de_personnes">
                    <label for="nombre_de_personne">Nombre de personne(s) : </label>
                    <textarea name="nb_personne_max" id="" cols="5" rows="1" required></textarea>
                    </div>
                    <br>
                    <div id="nombre_de_personnes">
                        <label for="surface" >Surface habitable (m2) : </label>
                        <textarea name="surface_habitable_logement" id="" cols="5" rows="1" required></textarea>
                     </div>
                     <br>
                     <div id="nombre_de_personnes">
                        <label for="nombre_de_chambre">Nombre de chambre(s) :</label>
                        <textarea name="nb_chambre_logement" id="nombre_de_chambre_input" cols="5" rows="1" required></textarea>
                    </div>
                    <br>
                    <div id="nombre_de_personnes">
                        <label for="nombre_de_salle_de_bain">Nombre de salle(s) de bain : </label>
                        <textarea name="nb_salle_de_bain_logement" id="" cols="5" rows="1" required></textarea>
                     </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <button  type="button" id="retour_page_3" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}g" alt="">Retour</button>   
            <button type="button" id="suivant_page_3" class="bouttons_suivant" onclick="validatePage3()">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>

        </div>
    
    </div>


    <div id="page_4" class="page">
        <div>
            <h3>Décrivez vos chambres *</h3>
            <div id="chambres_container" class="chambres-container"></div>
        </div>
        <div id="footer">
            <button type="button" id="retour_page_4" class="bouttons_retour" onclick="page_4_to_page_3()"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
            <button type="button" onclick="validatePage4()" id="suivant_page_4" class="bouttons_suivant">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
        </div>
    </div>
<div id="page_5" class="page">
    <div id="gauche_page_5">
        <h3>Quels aménagements propose votre logement ?</h3>
        <div class="button-row">
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Terrasse">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/terrasse.png')}}" alt="Terrasse">
                </div>
                <span>Terrasse</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Jardin">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/jardin.png')}}" alt="Jardin">
                </div>
                <span>Jardin</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')"  class="image-button page-5-button boutton_selection" value="Balcon">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/balcon.png')}}" alt="Balcon">
                </div>
                <span>Balcon</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Parking privé">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/parking_prive.png')}}" alt="Parking privé">
                </div>
                <span>Parking privé</span>
            </button>
        </div>
        <div class="button-row">
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Parking public">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/parking_public.png')}}" alt="Parking public">
                </div>
                <span>Parking public</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Patio">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/patio.png')}}" alt="Patio">
                </div>
                <span>Patio</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Salon d'hiver">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/salon_hiver.png')}}" alt="Salon d'hiver">
                </div>
                <span>Salon d'hiver</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection" value="Véranda">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/veranda.png')}}" alt="Véranda">
                </div>
                <span>Véranda</span>
            </button>
        </div>
        <input type="hidden" id="selectedPage5ValuesGauche" name="amenagement_propose_logement" value="">
    </div>

    <div id="droite_page_5">
        <h3>Quels équipements propose votre logement ?</h3>
        <div class="button-row">
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Wifi">
                <div class="image-container">
                    <img src="{{asset('img/equipements/wifi.png')}}" alt="Wifi">
                </div>
                <span>Wifi</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection"  value="Télévision">
                <div class="image-container">
                    <img src="{{asset('img/equipements/télévision.png')}}" alt="Télévision">
                </div>
                <span>Télévision</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Cuisine">
                <div class="image-container">
                    <img src="{{asset('img/equipements/cuisine.png')}}" alt="Cuisine">
                </div>
                <span>Cuisine</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Lave-linge">
                <div class="image-container">
                    <img src="{{asset('img/equipements/lave-linge.png')}}" alt="Lave-linge">
                </div>
                <span>Lave-linge</span>
            </button>
        </div>
        <div class="button-row">
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Lave-vaisselle">
                <div class="image-container">
                    <img src="{{asset('img/equipements/Lave-vaisselle.png')}}" alt="Lave-vaisselle">
                </div>
                <span>Lave-vaisselle</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Instrument">
                <div class="image-container">
                    <img src="{{asset('img/equipements/instrument.png')}}" alt="Instrument">
                </div>
                <span>Instrument</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Appareils de sport">
                <div class="image-container">
                    <img src="{{asset('img/equipements/appareils_de_sport.png')}}" alt="Appareils de sport">
                </div>
                <span>Appareils de sport</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Cheminée">
                <div class="image-container">
                    <img src="{{asset('img/equipements/cheminee.png')}}" alt="Cheminée">
                </div>
                <span>Cheminée</span>
            </button>
        </div>
        <div class="button-row">
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Barbecue">
                <div class="image-container">
                    <img src="{{asset('img/equipements/barbecue.png')}}" alt="Barbecue">
                </div>
                <span>Barbecue</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection" value="Équipement PMR">
                <div class="image-container">
                    <img src="{{asset('img/equipements/equipements_pmr.png')}}" alt="Équipement PMR">
                </div>
                <span>Équipement PMR</span>
            </button>
        </div>
        
    </div>
    <input type="hidden" id="selectedPage5ValuesDroite" name="equipement_propose_logement" value="">
    <div id="footer">
        <button type="button"id="retour_page_5" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
        <button type="button" id="suivant_page_5" class="bouttons_suivant" onclick="savePage5Data()">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
    </div>
</div>
<div id="page_6" class="page">
    <div id="gauche_page_6" class="page-6-section">
        <h3 class="section-title">Aménagements spéciaux</h3>
        <div class="button-row">
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Jaccuzi">
                <div class="image-container">
                    <img src="{{asset('img/installations/jacuzzi.png')}}" alt="Jaccuzi">
                </div>
                <span>Jaccuzi</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Sauna">
                <div class="image-container">
                    <img src="{{asset('img/installations/sauna.png')}}" alt="Sauna">
                </div>
                <span>Sauna</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Piscine">
                <div class="image-container">
                    <img src="{{asset('img/installations/piscine.png')}}" alt="Piscine">
                </div>
                <span>Piscine</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Climatisation">
                <div class="image-container">
                    <img src="{{asset('img/installations/climatisation.png')}}" alt="Climatisation">
                </div>
                <span>Climatisation</span>
            </button>
        
        
            <button type="button" onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Hammam">
                <div class="image-container">
                    <img src="{{asset('img/installations/hammam.png')}}" alt="Hammam">
                </div>
                <span>Hammam</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Espace de travail">
                <div class="image-container">
                    <img src="{{asset('img/installations/espace_de_travail.png')}}" alt="Espace de travail">
                </div>
                <span>Espace de travail</span>
            </button>
        </div>
        <input type="hidden" id="selectedPage6ValuesGauche" name="installation_offerte_logement" value="">
    </div>
    <div id="droite_page_6" class="page-6-section">
        <h3 class="section-title">Services</h3>
        <div class="button-row">
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Ménage">
                <div class="image-container">
                    <img src="{{asset('img/services/menage.png')}}" alt="Ménage">
                </div>
                <span>Ménage</span>
            </button>
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Taxi">
                <div class="image-container">
                    <img src="{{asset('img/services/taxi.png')}}" alt="Taxi">
                </div>
                <span>Taxi</span>
            </button>
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Linge">
                <div class="image-container">
                    <img src="{{asset('img/services/linge.png')}}" alt="Linge">
                </div>
                <span>Linge</span>
            </button>
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="Ustensile de cuisine">
                <div class="image-container">
                    <img src="{{asset('img/services/ustensiles_de_cuisine.png')}}" alt="Ustensile de cuisine">
                </div>
                <span>Ustensile de cuisine</span>
            </button>
        </div>
        <button type="button" onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection" value="velo">
        <div class="image-container">
            <img src="{{asset('img/services/velo.png')}}" alt="Vélo">
        </div>
        <span>Vélo</span>
    </button>
    </div>
    <input type="hidden" id="selectedPage6ValuesDroite" name="service_complementaire_logement" value="">
    <div id="footer">
        <button type="button"id="retour_page_6" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
        <button type="button"id="suivant_page_6" class="bouttons_suivant"onclick="savePage6Data()">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
    </div>
</div>
<div id="page_7" class="page">
    <div id="gauche_page_7" class="page-7-section">
        <h3 class="section-title">Quels sont les charges additionnelles que vous souhaitez proposer ?</h3>
        <div class="button-row">
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection" value="menage">
            <div class="image-container">
                <img src="{{asset('img/charges/menage.png')}}" alt="Ménage_image">
            </div>
            <span>Ménage</span>
        </button>
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection" value="Animaux">
            <div class="image-container">
                <img src="{{asset('img/services/animaux.png')}}" alt="Animal_image">
            </div>
            <span>Animaux</span>
        </button>
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection" value="Taxe">
            <div class="image-container">
                <img src="{{asset('img/services/taxe.png')}}" alt="Taxe_image">
            </div>
            <span>Taxe(s)</span>
        </button>
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection" value="personne_supp">
            <div class="image-container">
                <img src="{{asset('img/services/personne_suplementaire.png')}}" alt="Personne">
            </div>
            <span>Personne suplémentaire</span>
            <input type="hidden" id="selectedPage7ValuesGauche" name="charge_additionnel_libelle" value="">
        </div>
       

    </div>
    <div id="droite_page_7" class="page-7-section">
        <h3 class="section-title">Quel sera le prix par nuit de votre logement ? *</h3>
        <div id="alignement_input_euro">
            <input type="text" id="input_page_7" placeholder="Prix par nuit" name="prix_logement">
            <img src="{{asset('img/symbole_euro.png')}}" alt="Symbole euro">
        </div>
        
    </div>
    <div id="footer">
        <button type="button"id="retour_page_7" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
        <button type="button" id="suivant_page_7" class="bouttons_suivant" onclick="validatePage7()">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>

    </div>
</div>
<div id="page_8" class="page">
    <div id="gauche_page_8">
        <h3 class="section-title" id="titre_gauche_page_8">Quel sera la photo de couverture de votre logement ? *</h3>
        <div class="image-upload-container">
            <input type="file" class="image-upload" accept="image/*" id="image-upload1">
            <label for="image-upload1" class="custom-button">Importer l'image</label>
            <div class="selected-image" id="selected-image1"></div>
          </div>
      
    </div>
    <div id="droite_page_8">
        <h3 class="section-title" id="titre_droite_page_8">Quelles seront les photos de votre logement ? *</h3>
        <div id="division_colonnes_droite">
            <div id="images_colonne_gauche">
                <div class="image-upload-container">
                    <input type="file" class="image-upload" accept="image/*" id="image-upload2">
                    <label for="image-upload2" class="custom-button">Importer l'image</label>
                    <div class="selected-image" id="selected-image2"></div>
                  </div>
                  <div class="image-upload-container">
                    <input type="file" class="image-upload" accept="image/*" id="image-upload3">
                    <label for="image-upload3" class="custom-button">Importer l'image</label>
                    <div class="selected-image" id="selected-image3"></div>
                  </div>
                  <div class="image-upload-container">
                    <input type="file" class="image-upload" accept="image/*" id="image-upload4">
                    <label for="image-upload4" class="custom-button">Importer l'image</label>
                    <div class="selected-image" id="selected-image4"></div>
                  </div>
                  <div class="image-upload-container">
                    <input type="file" class="image-upload" accept="image/*" id="image-upload5">
                    <label for="image-upload5" class="custom-button">Importer l'image</label>
                    <div class="selected-image" id="selected-image5"></div>
                  </div>
                </div>
                <div id="images_colonne_droite">
                    <div class="image-upload-container">
                        <input type="file" class="image-upload" accept="image/*" id="image-upload6">
                        <label for="image-upload6" class="custom-button">Importer l'image</label>
                        <div class="selected-image" id="selected-image6"></div>
                    </div>
                    <div class="image-upload-container">
                        <input type="file" class="image-upload" accept="image/*" id="image-upload7">
                        <label for="image-upload7" class="custom-button">Importer l'image</label>
                        <div class="selected-image" id="selected-image7"></div>
                    </div>
                    <div class="image-upload-container">
                        <input type="file" class="image-upload" accept="image/*" id="image-upload8">
                        <label for="image-upload8" class="custom-button">Importer l'image</label>
                        <div class="selected-image" id="selected-image8"></div>
                    </div>
                    <div class="image-upload-container">
                        <input type="file" class="image-upload" accept="image/*" id="image-upload9">
                        <label for="image-upload9" class="custom-button">Importer l'image</label>
                        <div class="selected-image" id="selected-image9"></div>
                    </div>
                </div>
        </div>

         
    </div>
    <div id="footer">
        <button type="button" id="retour_page_8" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
        <button type="button" id="enregistrer_page_8" class="bouttons_suivant" onclick="saveAndSubmitForm()">Enregistrer<img src="{{asset('img/enregistrer.png')}}" alt=""></button>
    </div>
</div>
</form>


    <script src="{{asset('js/script_logement.js')}}"></script>
</body>
</html>
