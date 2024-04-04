<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/styles_detail_logement.css')}}" rel="stylesheet"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <title>Détails d'un logement</title>
</head>
<body>
    <x-Navbar></x-Navbar>
    <!--Code pour le carrousel-->
    <div class="carou">
      <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-inner" id="carousel">
            <div class="carousel-item active">
                <img src="{{ asset('storage/logement' . $logement->id_logement . '/img0.jpg') }}" class="d-block w-100">
                <div id="imgGolmon">
                  @for($i = 1; $i < intval($nb_photo) && $i < 3; $i++)
                      <img src="{{ asset('storage/logement' . $logement->id_logement . '/img' . $i . '.jpg')}}" class="d-block w-100">
                  @endfor
                </div>
            </div>
            @for($i = 1; $i < intval($nb_photo)-1; $i++)
              @php $counter = 0; @endphp
              <div class="carousel-item">
                <img src="{{ asset('storage/logement' . $logement->id_logement . '/img' . $i . '.jpg')}}" class="d-block w-100">
                
                <div>
                  @for($j = $i + 1; $j < intval($nb_photo)-1 && $counter < 2; $j++)
                    @php $counter++; @endphp
                    <img class="1" src="{{ asset('storage/logement' . $logement->id_logement . '/img' . $j . '.jpg')}}" class="d-block w-100">
                  @endfor

                  @for($j = 0; $j < $i && $counter < 2; $j++)
                    @php $counter++; @endphp
                    <img class="2" src="{{ asset('storage/logement' . $logement->id_logement . '/img' . $j . '.jpg')}}" class="d-block w-100">
                  @endfor
                </div>
              </div>
            @endfor
          </div>  
      </div>
        <button style="z-index: 0" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button style="z-index: 0" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="second">
      <div>
        <h1>{!! $logement->libelle_logement !!} n°{!! $logement->id_logement !!} / {!! $logement->accroche_logement !!}</h1>
        <h1>Nature et type de logement :</h1>
        <div class="Caracteristiques">
          @php
            if (count(explode(";", $logement->amenagement_propose_logement)) > 1) {
              $amenagement = [];
              $amenagement = explode(";", $logement->amenagement_propose_logement);
            } else {
              $amenagement = $logement->amenagement_propose_logement;
            }

            if (count(explode(";", $logement->installation_offerte_logement)) > 1) {
              $installation = [];
              $installation = explode(";", $logement->installation_offerte_logement);
            } else {
              $installation = $logement->installation_offerte_logement;
            }

            if (count(explode(";", $logement->service_complementaire_logement)) > 1) {
              $service = [];
              $service = explode(";", $logement->service_complementaire_logement);
            } else {
              $service = $logement->service_complementaire_logement;
            }

            if (count(explode(";", $logement->equipement_propose_logement)) > 1) {
              $equipement = [];
              $equipement = explode(";", $logement->equipement_propose_logement);
            } else {
              $equipement = $logement->equipement_propose_logement;
            }

            if (count(explode(";", $logement->charge_additionnel_libelle)) > 1) {
              $charge = [];
              $charge = explode(";", $logement->charge_additionnel_libelle);
            } else {
              $charge = $logement->charge_additionnel_libelle;
            }
          @endphp


          <!-- Nature et type de logement -->
            @php
              $nature = strtolower($logement->nature_logement);
              $nature = str_replace(' ', '_', $nature);
            @endphp
            <div class="rectangle">
              <img src="{{asset('/img/nature/'.$nature.'.png')}}" class="d-block w-80">
              <p>{{ $logement->nature_logement }}</p>
            </div>
            @php
                $type = strtolower($logement->type_logement);

            @endphp
            <div class="rectangle">
              <img src="{{asset('/img/type/'.$type.'.png')}}" class="d-block w-80">
              <p>{!! $logement->type_logement !!}</p>
            </div>
        </div>


        <!-- Aménagements -->
        <h1>Aménagements, installations :</h1>
        <div class="Caracteristiques">
          @php
            if(count(explode(";", $logement->amenagement_propose_logement)) == 1) {
            $value = strtolower($amenagement);
            $value = str_replace(' ', '_', $value);
          @endphp
            <div class="rectangle">
              <img src="{{asset('/img/amenagements/' . $value . '.png')}}" class="d-block w-80">
              <p>{!! $amenagement !!}</p>
            </div>
          @php
            }
            elseif($amenagement == "null" || $amenagement == "") {
              @endphp
            <div class="rectangle" style="display : none;">
              <img src="{{asset('/img/amenagements/a.png')}}" class="d-block w-80">
              <p>a</p>
            </div>
            @php
            }

          elseif(count(explode(";", $logement->amenagement_propose_logement)) > 1) {
          foreach ($amenagement as $values) {
            $value = strtolower($values);
            $value = str_replace(' ', '_', $value);
            @endphp
            <div class="rectangle">
              <img src="{{asset('/img/amenagements/' . $value . '.png')}}" class="d-block w-80">
              <p>{!! $values !!}</p>
            </div>
            @php
            }
          } @endphp

          <!-- Installations -->
          @php
          if(count(explode(";", $logement->installation_offerte_logement)) > 1) {
            foreach ($installation as $values) {
            $value = strtolower($values);
            $value = str_replace(' ', '_', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/installations/' . $value . '.png')}}" class="d-block w-80">
            <p>{!! $values !!}</p>
          </div>
          @php
            }
          }
          elseif($installation == "null" || $amenagement == "") {
            @endphp
            <div class="rectangle" style="display : none;">
            <img src="{{asset('/img/installations/a.png')}}" class="d-block w-80">
            <p>a</p>
          </div>
          @php
          } 
          
          elseif(count(explode(";", $logement->installation_offerte_logement)) == 1) {
            $value = strtolower($installation);
            $value = str_replace(' ', '_', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/installations/' . $value . '.png')}}" class="d-block w-80">
            <p>{!! $installation !!}</p>
          </div>
          @php 
            }
          @endphp
        </div>


        <!-- Services -->
        <h1>Services, Equipements :</h1>
        <div class="Caracteristiques">
          @php
            if(count(explode(";", $logement->service_complementaire_logement)) > 1) {
            foreach ($service as $values) {
              $value = strtolower($values);
              $value = str_replace(' ', '_', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/services/'. $value .'.png')}}" class="d-block w-80">
            <p>{!! $values !!}</p>
          </div>
          @php 
            }
          } 
          elseif($service == "null" || $service == "") {
            @endphp
            <div class="rectangle" style="display : none;">
                <img src="{{asset('/img/services/a.png')}}" class="d-block w-80">
                <p>a</p>
            </div>
            @php
          }


          elseif(count(explode(";", $logement->service_complementaire_logement)) == 1) {
            $value = strtolower($service);
            $value = str_replace(' ', '_', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/services/'. $value .'.png')}}" class="d-block w-80">
            <p>{!! $service !!}</p>
          </div>
          @php 
            }
          @endphp

          <!-- Equipements -->
          @php
            if(count(explode(";", $logement->equipement_propose_logement)) > 1) {
            foreach ($equipement as $values) {
              $value = strtolower($values);
              $value = str_replace(' ', '_', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/equipements/'. $value .'.png')}}" class="d-block w-80">
            <p>{!! $values !!}</p>
          </div>
          @php 
            }
          }
          elseif($equipement == "null" || $equipement == "") {
            @endphp
            <div class="rectangle" style="display : none;">
                <img src="{{asset('/img/equipements/a.png')}}" class="d-block w-80">
                <p>a</p>
            </div>
            @php
          }
          
          elseif(count(explode(";", $logement->equipement_propose_logement)) == 1) {
            $value = strtolower($equipement);
            $value = str_replace(' ', '_', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/equipements/'. $value .'.png')}}" class="d-block w-80">
            <p>{!! $equipement !!}</p>
          </div>
          @php 
            }
          @endphp
          </div>


          <!-- Charges additionnelles -->
        <h1>Charges additionnelles:</h1>
        <div class="Caracteristiques">
          @php
            if(count(explode(";", $logement->charge_additionnel_libelle)) > 1) {
            foreach ($charge as $values) {
              $value = strtolower($values);
              $value = str_replace('_', ' ', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/charges/'. $value .'.png')}}" class="d-block w-80">
            <p>{!! $value !!}</p>
          </div>
          @php 
            }
          } 
          elseif($charge == "null" || $charge == "") {
            @endphp
            <div class="rectangle" style="display : none;">
                <img src="{{asset('/img/charges/a.png')}}" class="d-block w-80">
                <p>a</p>
            </div>
            @php
            }
          elseif(count(explode(";", $logement->charge_additionnel_libelle)) == 1) {
            $value = strtolower($charge);
            $affichage = str_replace('_', ' ', $value);
          @endphp
          <div class="rectangle">
            <img src="{{asset('/img/charges/'. $value .'.png')}}" class="d-block w-80">
            <p>{!! $affichage !!}</p>
          </div>
          @php 
            }
          @endphp
        </div>


      <h1>Description :</h1>
      <p>{{ $logement->descriptif_logement }}</p>
      <p style="display:none;">Condiditon d'annulation :</p>
      <div class="Condition_annul" style="display:none;">
        <h5>Flexibles :</h5>
        <p>Remboursement intégral jusqu’à 3 jours avant la date d’arrivée</p>
      </div>
      <h1>Nombre de chambre, lit et salle de bain :</h1>
      <p class="nb_chambre">Il y'a {{ $logement->nb_chambre_logement }} Chambre(s)</p>
        @foreach ($chambre as $values)
        @php
          $n = $loop->iteration;
        @endphp
        <br>
        <div class="chambre">
          <p>Chambre n°{{ $n }}</p>
          <p>Elle possède : {{ $values->nb_lit_simple }} lit(s) simple(s)</p>
          <p>Elle possède : {{ $values->nb_lit_double }} lit(s) double(s)</p>
          <p>Détail des lits de la chambre : {{ $values->details_lit }}</p>
        </div>
        <br>
        @endforeach
        @if ($paypal[0]->paypal_proprio == null || $paypal[0]->paypal_proprio == "")
          <p class="not_paypal">Le propriétaire n'a pas paypal</p>
        @else
          <p class="have_paypal">Le propriétaire a paypal</p>
        @endif
        <br>

        <div id="Mamap" style="height: 200px; width: 100%;"></div>
        <script type="text/javascript">
          var mymap = L.map('mapid', {
                  center: [47.9991200, -3.2733700],
                  zoom: 8,
                  gestureHandling: true,
                  gestureHandlingOptions: {
                      duration: 1000,
                      text: {
                          touch: "Utilisez deux doigts pour déplacer la carte",
                          scroll: "Utiliser CTRL + scroll pour zoomer la carte",
                          scrollMac: "Utiliser \u2318 + scroll pour zoomer la carte"
                      }
                  }
              });

          //ajout de la carte
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              maxZoom: 19,
              attribution: '© OpenStreetMap'
          }).addTo(mymap);

          //empecher le scroll
          mymap.scrollWheelZoom.disable();
      </script>
    </div>

      <div class="leStick">
          <p>à partir de : {{ $logement->prix_logement }} €/ mois</p>
          <p>Propriétaire : {!! $nom_proprio[0]->nom_pers !!}</p>
          <p>Nombre de personne max : {{ $logement->nb_personne_max }}</p>
          <ul>
            <li class="ville">Ville : {{ $logement->ville_logement }}</li>
          </ul>
          <ul>
            <li class="calendar">Disponibilité : dès maintenant</li>
          </ul>
          <ul>
            <li class="dimension">Dimension : {{ $logement->surface_habitable_logement }} m²</li>
          </ul>
          <ul>
            <li class="adresse">Adresse : {{ $logement->adresse_logement }}</li>
          </ul>
          <form id="myForm" action="{{route('demande_devis')}}" method="post" class="demande_devis">
            @csrf
            <div>
              <input type="hidden" name="id_logement" value="{{$logement->id_logement}}">
              <label for="dateDebut">Date de début</label>
              <input type="date" id="dateDebut" name="dateDebut" value="dateDebut" class="datepicker-input">
            </div>
            <div>
              <label for="dateFin">Date de fin</label>
              <input type="date" id="dateFin" name="dateFin" value="dateFin" class="datepicker-input">
            </div>
            <button type="submit" onclick="event.preventDefault(); showPopup();">Demander un devis</button>
          </form>
      </div>
    </div>


    <!-- Avis -->
    <hr id="id_hr">
    <div>
      <div class="avis">
        <h1>Avis :</h1>
        <div>
          <img src="{{asset('/img/etoile.png')}}" alt="étoile" id="etoile">
          @php
            $note_total = count($avis) == 0 ? 0 : array_sum(array_column($avis, 'note_avis'));
            $moyenne = count($avis) == 0 ? 0 : $note_total / count($avis);
            $nb_com = count($avis);
          @endphp
          <h3>{!! $moyenne !!} de moyenne | {!! $nb_com !!} commentaire(s)</h3>
        </div>
      </div>
       
      @if ($role == 1)
      <div class="creation_avis">
        <form id="myForm" action="{{route('accueil')}}" method="post" class="avis_form">
          @csrf
          <div class="rating">
            <span class="star" data-value="5">★</span>
            <span class="star" data-value="4">★</span>
            <span class="star" data-value="3">★</span>
            <span class="star" data-value="2">★</span>
            <span class="star" data-value="1">★</span>
            <label for="note_avis">: Notez</label>
          </div>
          <input type="hidden" name="ratingValue" id="ratingValue" value="0">
          <div>
            <label for="note_avis">Commentaire :</label>
            <textarea id="com_avis" name="com_avis" placeholder="Rédigez ici votre commentaire" maxlength="400"></textarea>
            <button type="submit" onclick="event.preventDefault(); showPopup();" class="form-button">Envoyer</button>
          </div>
        </form>
      </div>
      @endif

      <hr id="id_hr">


    <div class="les_avis">

    @php
      if($avis == null) { @endphp
        <p>Il n'y a pas d'avis pour le moment</p>
    @php
      } else {
        foreach ($avis as $values) {
          if(strlen($values->com_avis) < 200) {
    @endphp
        <div class="un_avis_simple">
          <div class="pp_avis">
          @if ($values->photo_pers == "pp_profile.png")
              <img id="image_pp_previsu" src="{{ asset('img/pp_profile.png')}}" class="pp" alt="photo de profil">
          @else
              <img id="image_pp_previsu" src="{{ asset('pp/pp' . $values->id . '/img1.png')}}" class="pp" alt="photo de profil">
          @endif
            <div>
              <p class="note">{!! $values->pseudo_pers !!}</p>
              <p class="commentaire">{!! $values->ville_pers !!}, {!! $values->pays_pers !!}</p>
            </div>
          </div>
          <div class="note_avis">
            <div class="etoile_div">
              <p class="note">{!! $values->note_avis !!}/5</p>
              <img src="{{asset('/img/etoile.png')}}" alt="étoile" id="note_etoile">
            </div>
            <p class="commentaire">{!! $values->com_avis !!}</p>
          </div>
        </div>
    @php  } else { @endphp
        <div class="un_avis">
          <div class="pp_avis">
          @if ($values->photo_pers == "pp_profile.png")
              <img id="image_pp_previsu" src="{{ asset('img/pp_profile.png')}}" class="pp" alt="photo de profil">
          @else
              <img id="image_pp_previsu" src="{{ asset('pp/pp' . $values->id . '/img1.png')}}" class="pp" alt="photo de profil">
          @endif
            <div class="div_note">
              <p class="note">{!! $values->pseudo_pers !!}</p>
              <p class="commentaire">{!! $values->ville_pers !!}, {!! $values->pays_pers !!}</p>
            </div>
          </div>
          <div class="note_avis">
          <div class="etoile_div">
              <p class="note">{!! $values->note_avis !!}/5</p>
              <img src="{{asset('/img/etoile.png')}}" alt="étoile" id="note_etoile">
            </div>
            <p class="text">{!! $values->com_avis !!}</p>
            <a href="#" class="toggle">en savoir plus</a>
          </div>
        </div>   
    @php
          }
        }
      }
    @endphp
    </div>
    <!-- Fin des avis -->

    <x-FooterClient></x-FooterClient>
    <script src="{{asset('js/script_detail_logement.js')}}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>