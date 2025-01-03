<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Création de logement</title>
    <link rel="stylesheet" href="{{asset('css/style_logement.css')}}">
</head>

<body>
    <x-navbar></x-navbar>
    <div id="page_1" class="page">
        <div id="texte_page_1" >
            <h2 class="texte_justifie">Dites nous tout sur votre logement !</h2>
            <br>   
            <p class="texte_justifie">Remplisser ce formulaire afin d'ajouter <br>
votre logement à ce site, les champs dont les titres sont marqués d'un * (Astérisque) sont obligatoires.</p>
        </div>
            <div id="footer">
                <button  type="button" id="retour_page_1" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
                <button  type="button" id="suivant_page_1" class="bouttons_suivant">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
            </div>
    </div>
    <form action="{{route('updateLogementBDD')}}" method="post" id="selectedHousing_form" enctype="multipart/form-data" >
    @csrf
    <div id="page_2" class="page"> 
        <div id="gauche_page_2">
                <h2 id="titre_colonne_gauche_page_2">De quel nature est votre <br>logement ? *</h2>
                <input id="idNatLogement" type="hidden" value="{!! $logement->nature_logement !!}">
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selectio btnNatLogement" value="Maison">
                        <div class="image-container">
                            <img src="{{asset('img/nature/maison.png')}}" alt="Maison">
                        </div>
                        <span>Maison</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement" value="Appartement">
                        <div class="image-container">
                            <img src="{{asset('img/nature/appartement.png')}}" alt="Appartement">
                        </div>
                        <span>Appartement</span>
                    </button>
                </div>
            
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement"  value="Villa">
                        <div class="image-container">
                            <img src="{{asset('img/nature/villa.png')}}" alt="Villa d'exception">
                        </div>
                        <span>Villa d'exception</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement" value="Bateau">
                        <div class="image-container">
                            <img src="{{asset('img/nature/bateau.png')}}" alt="Bateau">
                        </div>
                        <span>Bateau</span>
                    </button>
                </div>
            
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement" value="Chambre d'hôte">
                        <div class="image-container">
                            <img src="{{asset('img/nature/chambre_hote.png')}}" alt="Chambre d'hôte">
                        </div>
                        <span>Chambre d'hôte</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement" value="Maison">
                        <div class="image-container">
                            <img src="{{asset('img/nature/maison_hote.png')}}" alt="Maison d'hôte">
                        </div>
                        <span>Maison d'hôte</span>
                    </button>
                </div>
            
                <div class="button-row">
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement" value="Cabane">
                        <div class="image-container">
                            <img src="{{asset('img/nature/cabane.png')}}" alt="Cabane">
                        </div>
                        <span>Cabane</span>
                    </button>
            
                    <button type="button" onclick="selectItem(this, 'selectedHousing')" class="image-button boutton_selection btnNatLogement" value="Caravane">
                        <div class="image-container">
                            <img src="{{asset('img/nature/caravane.png')}}" alt="Caravane">
                        </div>
                        <span>Caravane</span>
                    </button>
                </div>
                <input type="hidden" id="selectedHousing" name="nature_logement" value="" >
        </div>
        <div id="droite_page_2">
            
            <h2>De quel type est votre logement ?*</h2>
            <input type="hidden" id="idTypeLogement" value="{!! $logement->type_logement !!}">
            <br>
            <div id="t1-t2">

                <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="t1">
                    <div class="image-container">
                        <img src="{{asset('img/type/t1.png')}}" alt="T1">
                    </div>
                    <span>T1</span>
                </button>
                <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="t2">
                    <div class="image-container">
                        <img src="{{asset('img/type/t2.png')}}" alt="T2">
                    </div>
                    <span>T2</span>
                </button>
            </div>
            <div id="t3-t4">
                <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="t3">
                    <div class="image-container">
                        <img src="{{asset('img/type/t3.png')}}" alt="T3">
                    </div>
                    <span>T3</span>
                </button>
                <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="t4">
                    <div class="image-container">
                        <img src="{{asset('img/type/t4.png')}}" alt="T4">
                    </div>
                    <span>T4</span>
                </button>
            </div>
            <div id="studio-duplex">
                <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="Studio">
                    <div class="image-container">
                        <img src="{{asset('img/type/studio.png')}}" alt="Studio">
                    </div>
                    <span>Studio</span>
                </button>
                <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="Duplex">
                    <div class="image-container">
                        <img src="{{asset('img/type/duplex.png')}}" alt="Duplex">
                    </div>
                    <span>Duplex</span>
                </button>

            </div>
            <button type="button" onclick="selectItem_droite(this, 'selectedSize1')" class="image-button boutton_selection btnTypeLogement" value="Triplex" id="triplex">
                <div class="image-container">
                    <img src="{{asset('img/type/triplex.png')}}" alt="Triplex">
                </div>
                <span>Triplex</span>
            </button>
        </div>

        <input type="hidden" id="selectedSize1" name="type_logement" value="">
        <div id="footer">
            <button  type="button" id="retour_page_2" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
            <button  type="button" onclick="validateForm()"id="suivant_page_2" class="bouttons_suivant" >Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
        </div>
    
    </div>

    <div id="page_3" class="page">
        <div id="colonne_gauche_page_3">
          
            <div id="location_logement">
                <h2>Où se situe votre logement ?*</h2>
                <input type="text" placeholder="votre adresse" name="adresse_logement" value="{!! $logement->adresse_logement !!}" required>
                <br>
                <input type="text" placeholder="Saisissez votre ville" name="ville_logement" value="{!! $logement->ville_logement !!}" required>
                <br>
                <input type="number" placeholder="Code postal" name="code_postal_logement" min="0" max="99999" value="{!! $logement->code_postal_logement !!}" required>
                <br>
            </div>

            <div id="titre_logement">
                <h2>Quel sera le titre du logement ?*</h2>
                <input type="text" name="libelle_logement" placeholder="Saisissez le libellé du logement" value="{!! $logement->libelle_logement !!}" required>
                <br>
                <input type="text" name="accroche_logement" placeholder="Saisissez l'accroche du logement" value="{!! $logement->accroche_logement !!}" required>
            </div>

        </div>
        <div id="colonne_droite_page_3">
            <h2>Décrivez-nous votre logement *</h2>
            <div id="description_logement">
                <textarea id="description_logement_input"  name="descriptif_logement" rows="4" cols="50" maxlength="950" required>{!! $logement->descriptif_logement !!}</textarea>
                <div id="description_logement_precise">
                    <div id="nombre_de_personnes">
                    <label for="nombre_de_personne">Nombre de personne(s) : </label>
                    <input type="number" name="nb_personne_max" id="" cols="5" rows="1" value="{!! $logement->nb_personne_max !!}" required>
                    </div>
                    <br>
                    <div id="nombre_de_personnes">
                        <label for="surface" >Surface habitable (m2) : </label>
                        <input type="number"name="surface_habitable_logement" id="" cols="5" rows="1" value="{!! $logement->surface_habitable_logement !!}" required>
                     </div>
                     <br>
                     <div id="nombre_de_personnes">
                        <label for="nombre_de_chambre">Nombre de chambre(s) :</label>
                        <input type="number"name="nb_chambre_logement" id="nombre_de_chambre_input" cols="5" rows="1" value="{!! $logement->nb_chambre_logement !!}" required>
                    </div>
                    <br>
                    <div id="nombre_de_personnes">
                        <label for="nombre_de_salle_de_bain">Nombre de salle(s) de bain : </label>
                        <input type="number"name="nb_salle_de_bain_logement" id="" cols="5" rows="1" value="{!! $logement->nb_salle_de_bain_logement !!}" required>
                     </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <button  type="button" id="retour_page_3" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
            <button type="button" id="suivant_page_3" class="bouttons_suivant" onclick="validatePage3()">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>

        </div>
    
    </div>


    <div id="page_4" class="page">
        <div>
            <h2 id="titre_page_4">Décrivez vos chambres *</h2>
            <div id="chambres_container" class="chambres-container"></div>
        </div>
        <input type="hidden" id="total_lits" name="nb_lit_total" value="">
        <div id="footer">
            <button type="button" id="retour_page_4" class="bouttons_retour" onclick="page_4_to_page_3()"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
            <button type="button" onclick="validatePage4()" id="suivant_page_4" class="bouttons_suivant">Suivant<img src="{{asset('img/fleche_suivant.png')}}" alt=""></button>
        </div>
    </div>
<div id="page_5" class="page">
    <div id="gauche_page_5">
        <h2 id="titre_gauche_page_5">Quels aménagements propose votre logement ?</h2>
        <input type="hidden" id="idAmenagementLogement" value="{!! $logement->amenagement_propose_logement !!}">
        <div class="button-row">
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Terrasse">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/terrasse.png')}}" alt="Terrasse">
                </div>
                <span>Terrasse</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Jardin">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/jardin.png')}}" alt="Jardin">
                </div>
                <span>Jardin</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')"  class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Balcon">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/balcon.png')}}" alt="Balcon">
                </div>
                <span>Balcon</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Parking privé">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/parking_privé.png')}}" alt="Parking privé">
                </div>
                <span>Parking privé</span>
            </button>
        </div>
        <div class="button-row">
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Parking public">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/parking_public.png')}}" alt="Parking public">
                </div>
                <span>Parking public</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Patio">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/patio.png')}}" alt="Patio">
                </div>
                <span>Patio</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Salon d'hiver">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/salon_hiver.png')}}" alt="Salon d'hiver">
                </div>
                <span>Salon d'hiver</span>
            </button>
            <button type="button" onclick="selectItemGauche(this, 'selectedSize')" class="image-button page-5-button boutton_selection btnAmenagementLogement" value="Véranda">
                <div class="image-container">
                    <img src="{{asset('img/amenagements/véranda.png')}}" alt="Véranda">
                </div>
                <span>Véranda</span>
            </button>
        </div>
        <input type="hidden" id="selectedPage5ValuesGauche" name="amenagement_propose_logement" value="">
    </div>

    <div id="droite_page_5">
        <h2 id="titre_droite_page_5">Quels équipements propose votre logement ?</h2>
        <input type="hidden" id="idEquipementLogement" value="{!! $logement->equipement_propose_logement !!}">
        <div class="button-row">
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Wifi">
                <div class="image-container">
                    <img src="{{asset('img/equipements/wifi.png')}}" alt="Wifi">
                </div>
                <span>Wifi</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement"  value="Télévision">
                <div class="image-container">
                    <img src="{{asset('img/equipements/télévision.png')}}" alt="Télévision">
                </div>
                <span>Télévision</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Cuisine">
                <div class="image-container">
                    <img src="{{asset('img/equipements/cuisine.png')}}" alt="Cuisine">
                </div>
                <span>Cuisine</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Lave-linge">
                <div class="image-container">
                    <img src="{{asset('img/equipements/lave-linge.png')}}" alt="Lave-linge">
                </div>
                <span>Lave-linge</span>
            </button>
        </div>
        <div class="button-row">
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Lave-vaisselle">
                <div class="image-container">
                    <img src="{{asset('img/equipements/lave-vaisselle.png')}}" alt="Lave-vaisselle">
                </div>
                <span>Lave-vaisselle</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Instrument">
                <div class="image-container">
                    <img src="{{asset('img/equipements/instrument.png')}}" alt="Instrument">
                </div>
                <span>Instrument</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Appareils de sport">
                <div class="image-container">
                    <img src="{{asset('img/equipements/appareils_de_sport.png')}}" alt="Appareils de sport">
                </div>
                <span>Appareils de sport</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Cheminée">
                <div class="image-container">
                    <img src="{{asset('img/equipements/cheminée.png')}}" alt="Cheminée">
                </div>
                <span>Cheminée</span>
            </button>
        </div>
        <div class="button-row">
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Barbecue">
                <div class="image-container">
                    <img src="{{asset('img/equipements/barbecue.png')}}" alt="Barbecue">
                </div>
                <span>Barbecue</span>
            </button>
            <button type="button" onclick="selectItemDroite(this, 'selectedSize')"class="image-button page-5-button boutton_selection btnEquipementLogement" value="Équipement PMR">
                <div class="image-container">
                    <img src="{{asset('img/equipements/equipement_pmr.png')}}" alt="Équipement PMR">
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
        <h2 class="section-title">Installation(s) offerte(s)</h2>
        <input type="hidden" id="idInstallationLogement" value="{!! $logement->installation_offerte_logement !!}">
        <div class="button-row">
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnInstallationLogement" value="Jaccuzi">
                <div class="image-container">
                    <img src="{{asset('img/installations/jacuzzi.png')}}" alt="Jaccuzi">
                </div>
                <span>Jaccuzi</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnInstallationLogement" value="Sauna">
                <div class="image-container">
                    <img src="{{asset('img/installations/sauna.png')}}" alt="Sauna">
                </div>
                <span>Sauna</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnInstallationLogement" value="Piscine">
                <div class="image-container">
                    <img src="{{asset('img/installations/piscine.png')}}" alt="Piscine">
                </div>
                <span>Piscine</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnInstallationLogement" value="Climatisation">
                <div class="image-container">
                    <img src="{{asset('img/installations/climatisation.png')}}" alt="Climatisation">
                </div>
                <span>Climatisation</span>
            </button>
        
        
            <button type="button" onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnInstallationLogement" value="Hammam">
                <div class="image-container">
                    <img src="{{asset('img/installations/hammam.png')}}" alt="Hammam">
                </div>
                <span>Hammam</span>
            </button>
            <button type="button"onclick="selectItemGauche_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnInstallationLogement" value="Espace de travail">
                <div class="image-container">
                    <img src="{{asset('img/installations/espace_de_travail.png')}}" alt="Espace de travail">
                </div>
                <span>Espace de travail</span>
            </button>
        </div>
        <input type="hidden" id="selectedPage6ValuesGauche" name="installation_offerte_logement" value="">
    </div>
    <div id="droite_page_6" class="page-6-section">
        <h2 class="section-title">Services</h2>
        <input type="hidden" id="idServiceLogement" value="{!! $logement->service_complementaire_logement !!}">
        <div class="button-row">
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnServiceLogement" value="Ménage">
                <div class="image-container">
                    <img src="{{asset('img/services/ménage.png')}}" alt="Ménage">
                </div>
                <span>Ménage</span>
            </button>
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnServiceLogement" value="Taxi">
                <div class="image-container">
                    <img src="{{asset('img/services/taxi.png')}}" alt="Taxi">
                </div>
                <span>Taxi</span>
            </button>
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnServiceLogement" value="Linge">
                <div class="image-container">
                    <img src="{{asset('img/services/linge.png')}}" alt="Linge">
                </div>
                <span>Linge</span>
            </button>
            <button type="button"onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnServiceLogement" value="Ustensile de cuisine">
                <div class="image-container">
                    <img src="{{asset('img/services/ustensiles_de_cuisine.png')}}" alt="Ustensile de cuisine">
                </div>
                <span>Ustensile de cuisine</span>
            </button>
        </div>
        <button type="button" onclick="selectItemDroite_page_6(this, 'selectedSize')" class="image-button page-6-button boutton_selection btnServiceLogement" value="velo">
        <div class="image-container">
            <img src="{{asset('img/services/vélo.png')}}" alt="Vélo">
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
        <h2 class="section-title">Quels sont les charges additionnelles que vous souhaitez proposer ?</h2>
        <input type="hidden" id="idChargeLogement" value="{!! $logement->charge_additionnel_libelle !!}">
        <div class="button-row">
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection btnChargeLogement" value="menage">
            <div class="image-container">
                <img src="{{asset('img/charges/ménage.png')}}" alt="Ménage_image">
            </div>
            <span>Ménage</span>
        </button>
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection btnChargeLogement" value="Animaux">
            <div class="image-container">
                <img src="{{asset('img/charges/animaux.png')}}" alt="Animal_image">
            </div>
            <span>Animaux</span>
        </button>
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection btnChargeLogement" value="Taxe">
            <div class="image-container">
                <img src="{{asset('img/charges/taxe.png')}}" alt="Taxe_image">
            </div>
            <span>Taxe(s)</span>
        </button>
        <button type="button" onclick="selectItemGauche_page_7(this,'selectedSize')" class="image-button page-7-button boutton_selection btnChargeLogement" value="personne_supp">
            <div class="image-container">
                <img src="{{asset('img/charges/personne_suplémentaire.png')}}" alt="Personne">
            </div>
            <span>Personne suplémentaire</span>
            <input type="hidden" id="selectedPage7ValuesGauche" name="charge_additionnel_libelle" value="">
        </div>
       

    </div>
    <div id="droite_page_7" class="page-7-section">
        <h2 class="section-title">Quel sera le prix par nuit de votre logement ? *</h2>
        <div id="alignement_input_euro">
            <input type="number" id="input_page_7" placeholder="Prix par nuit" name="prix_logement" value="{!! $logement->prix_logement !!}">
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
        <h2 class="section-title" id="titre_gauche_page_8">Quel sera la photo de couverture de votre logement ? *</h2>
        <div class="image-upload-container">
            <input type="file" class="image-upload" accept="image/*" id="image-upload1" name="img1" required>
            <label for="image-upload1" class="custom-button">Importer l'image</label>
            <div class="selected-image" id="selected-image1"></div>
          </div>
      
    </div>
    <div id="droite_page_8">
        <h2 class="section-title" id="titre_droite_page_8">Quelles seront les photos de votre logement ? *</h2>
        <div id="division_colonnes_droite">
            <div id="images_colonne_gauche">
                <div id="drop_zone">
                    <p>Glissez-déposez jusqu'à 10 images ici.</p>
                    <input type="file" id="file_input" multiple>
                    <output id="result"></output>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <button type="button" id="retour_page_8" class="bouttons_retour"><img src="{{asset('img/fleche_retour.png')}}" alt="">Retour</button>   
        <button type="submit" id="enregistrer_page_8" class="bouttons_suivant" onclick="saveAndSubmitForm()">Enregistrer<img src="{{asset('img/enregistrer.png')}}" alt=""></button>
    </div>

</div>
   
</form>
<style>
         #drop_zone {
    width: 300px;
    height: 200px;
    border: 2px dashed #ccc;
    text-align: center;
    padding: 20px;
    margin: 20px auto;
}

#result {
    display: block;
    margin-top: 20px;
}
</style>
<script>
 // Récupérer les éléments du DOM
 var dropZone = document.getElementById('drop_zone');
var fileInput = document.getElementById('file_input');
var output = document.getElementById('result');
var form = document.getElementById('myForm');

// Empêcher le comportement par défaut du navigateur lors du glisser-déposer
dropZone.addEventListener('dragover', function(e) {
    e.preventDefault();
});

// Gérer l'événement de glisser-déposer
dropZone.addEventListener('drop', function(e) {
    e.preventDefault();
    var files = e.dataTransfer.files;
    handleFiles(files);
});

// Gérer l'événement de sélection de fichiers
fileInput.addEventListener('change', function() {
    var files = this.files;
    handleFiles(files);
});

// Fonction pour traiter les fichiers d'images
function handleFiles(files) {
    if (output.children.length + files.length > 10) {
        alert("Vous ne pouvez pas ajouter plus de 10 images.");
        return;
    }

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (file.type.match('image.*')) {
            var listItem = document.createElement('li');
            listItem.textContent = file.name;

            var deleteButton = document.createElement('button');
            deleteButton.textContent = "Supprimer";
            deleteButton.onclick = function() {
                listItem.parentNode.removeChild(listItem);
            };

            listItem.appendChild(deleteButton);
            output.appendChild(listItem);
        } else {
            output.innerHTML += "Le fichier " + file.name + " n'est pas une image.<br>";
        }
    }
}

// Valider le formulaire avant soumission
form.addEventListener('submit', function(e) {
    if (output.children.length < 2) {
        e.preventDefault(); // Empêcher l'envoi du formulaire
        alert("Veuillez ajouter au moins 2 images.");
    }
});


</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('js/script_modif_logement.js')}}"></script>
</body>
</html>
