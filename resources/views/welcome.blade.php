<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-search/dist/leaflet-search.min.css" />
    <script src="https://unpkg.com/leaflet-search@2.9.6/dist/leaflet-search.min.js"></script>
    <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
    <script src="//unpkg.com/leaflet-gesture-handling"></script>
    <link href="https://cdn.jsdelivr.net/npm/nouislider@14.6.4/distribute/nouislider.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/nouislider@14.6.4/distribute/nouislider.min.js"></script>
</head>
<body id="accueil">
    <x-Navbar></x-Navbar>
    <div>
        <div class="video-container">
            <img src="{{asset('/img/paysage.jpg')}}" />
        </div>
        <h1>Découvrez les meilleurs<br> logements<br> de toute la Bretagne</h1>
    </div>

    <section class="mieuxNote">
        <h2>Logements les mieux notés :</h2>
        <div class="liste-card">
            @foreach ($logements as $logement)
                <x-Card prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}" ville="{{$logement->ville_logement}}" titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}"></x-Card>
            @endforeach
        </div>
    </section>

    <div id="mapid" style="height: 500px;">
    </div>
    
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

    //ajout des marqueurs
    var markerGroup = L.layerGroup();

    //récupération des coordonnées des villes
    async function getCoordinates(cityName) {
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/search?city=${cityName}&format=json`);
            const data = await response.json();

            if (data.length > 0) {
                const latitude = parseFloat(data[0].lat);
                const longitude = parseFloat(data[0].lon);
                return [latitude, longitude];
            } else {
                console.error('No results found for city:', cityName);
                return null; // Retourne null si aucune donnée n'est trouvée
            }
        } catch (error) {
            console.error('Error:', error.message);
            return null; // Retourne null en cas d'erreur
        }
    }

    // Obtention de toutes les villes des logements
    var cities = [
        @foreach ($logementsRecents as $logement)
            "{{ $logement->ville_logement }}",
        @endforeach
    ];

    console.log("villes : " + cities);

    //obtention des autres infos que la ville :
    var logements = [
        @foreach ($logementsRecents as $logement)
            {
                id: "{{ $logement->id }}",
                libelle: "{{ $logement->libelle_logement }}",
                prix: "{{ $logement->prix_logement }}",
                nature: "{{ $logement->nature_logement }}",
            },
        @endforeach
    ];

    console.log('logements :', logements.map(logement => JSON.stringify(logement)));

    logements.forEach(logement => {
        console.log('id :', logement.id);
        console.log('libelle :', logement.libelle);
        console.log('prix :', logement.prix);
        console.log('nature :', logement.nature);
    });

    async function addMarkersForAllCities(cities, logements) {
        for (let i = 0; i < cities.length; i++) {
            const coords = await getCoordinates(cities[i]);
            if (coords) {
                const latitude = coords[0] + (Math.random() - 0.5) / 100;
                const longitude = coords[1] + (Math.random() - 0.5) / 100;
                const marker = L.marker([latitude, longitude]);
                const logement = logements[i];
                const imageUrl = 'https://site-sae-ubisoufte.bigpapoo.com/storage/logement' + logement.id + '/img0.jpg';
                marker.bindPopup(`
                    <img src="${imageUrl}" alt="Image du logement" style="width: 150px;"><br/>
                    <strong>${logement.libelle}</strong><br/>
                    Nature: ${logement.nature}<br/>
                    Prix: ${logement.prix}<br/>
                    <a href="/logement/${logement.id}/details">Voir les détails</a>
                `).on('click', function () { this.openPopup(); });

                // Ajout de la propriété 'name' au marqueur
                marker.options.name = cities[i];

                markerGroup.addLayer(marker);
            }catch (error) {
                console.error(`Error getting coordinates for city ${cities[i]}:`, error.message);
            }
        }
    }

    // Ajout des marqueurs pour toutes les villes
    addMarkersForAllCities(cities, logements);


    var baseMaps = {
        "carte classique": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(mymap),
        "carte en relief": L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data: © OpenStreetMap contributors, SRTM | Map style: © OpenTopoMap (CC-BY-SA)'
        }),
        "carte en breton": L.tileLayer('https://tile.openstreetmap.bzh/br/{z}/{x}/{y}.png', {
            maxZoom: 19
        }),
        "carte humanitaire": L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team hosted by OpenStreetMap France'
        })
    };

    var overlayMaps = {
        @foreach ($logementsRecents as $logement)
            "{{ $logement->nature_logement }}": markerGroup,
        @endforeach
    };

    L.control.layers(baseMaps).addTo(mymap);



    // Ajout du controle de recherche
    var searchControl = new L.Control.Search({
        layer: markerGroup,
        propertyName: 'name',
        marker: false,
        moveToLocation: function (latlng, title, map) {
            map.setView(latlng, 13);
        }
    });

    searchControl.on('search:locationfound', function (e) {
        e.layer.openPopup();
    });

    mymap.addControl(searchControl);

</script>

    <section class="autres">
        <h2>Nos logements les plus récents</h2>
        <div class="listeBtnTri">
            <script>
                let tri = 0;
                function triPrix() {
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);
                    let btnTriPrix = document.querySelector("#btnTriPrix");
                    
                    if(tri == 0) {
                        tri = 1;
                        btnTriPrix.innerHTML = "Trier par prix décroissant";
                        tabCard.sort((a, b) => {
                            let prixA = parseInt(a.classList[1]);
                            let prixB = parseInt(b.classList[1]);
                            return prixA - prixB;
                        });
                    } else {
                        tri = 0;
                        btnTriPrix.innerHTML = "Trier par prix croissant";
                        tabCard.sort((a, b) => {
                            let prixA = parseInt(a.classList[1]);
                            let prixB = parseInt(b.classList[1]);
                            return prixB - prixA;
                        });
                    }

                    let conteneurCard = document.querySelector(".autres .liste-card");
                    conteneurCard.innerHTML = "";

                    tabCard.forEach((carte) => {
                        conteneurCard.appendChild(carte);
                    });    
                }

                function triNote() {
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);
                    let btnTriNote = document.querySelector("#btnTriNote");
                    
                    if(tri == 0) {
                        tri = 1;
                        btnTriNote.innerHTML = "Trier par note décroissante";
                        tabCard.sort((a, b) => {
                            let noteA = parseInt(a.classList[3]);
                            let noteB = parseInt(b.classList[3]);
                            return noteA - noteB;
                        });
                    } else {
                        tri = 0;
                        btnTriNote.innerHTML = "Trier par note croissante";
                        tabCard.sort((a, b) => {
                            let noteA = parseInt(a.classList[3]);
                            let noteB = parseInt(b.classList[3]);
                            return noteB - noteA;
                        });
                    }

                    let conteneurCard = document.querySelector(".autres .liste-card");
                    conteneurCard.innerHTML = "";

                    tabCard.forEach((carte) => {
                        conteneurCard.appendChild(carte);
                    });    
                }

                document.addEventListener('DOMContentLoaded', (event) => {
                    let prixSlider = document.getElementById('prixSlider');

                    noUiSlider.create(prixSlider, {
                        start: [0, 5000], // valeurs de départ
                        connect: true, // relie les deux points de sélection
                        range: {
                            'min': 0, // prix minimum
                            'max': 5000 // prix maximum
                        },
                        tooltips: [true, true] // ajoute des tooltips aux curseurs
                    });

                    prixSlider.noUiSlider.on('start', function () {
                        prixSlider.classList.add('noUi-active');
                    });

                    prixSlider.noUiSlider.on('end', function () {
                        prixSlider.classList.remove('noUi-active');
                    });

                    prixSlider.noUiSlider.on('update', function (values, handle) {
                        let prixMin = Math.round(values[0]);
                        let prixMax = Math.round(values[1]);

                        // Mettez à jour votre filtre de prix ici
                        filtrePrix(prixMin, prixMax);
                    });
                });

                function filtrePrix(prixMin, prixMax) {
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);
                    let typeSelectionne = document.getElementById('selectionFiltre').value; // récupère le type de logement sélectionné
                    let counter = 0;

                    tabCard.forEach((carte) => {
                        let prix = parseInt(carte.classList[1]);
                        let type = carte.classList[2]; // récupère le type de logement de la carte

                        // Vérifie si le prix de la carte est dans la plage de prix et si son type correspond au type sélectionné
                        if(prix >= prixMin && prix <= prixMax && (typeSelectionne === "Aucun" || type === typeSelectionne)) {
                            carte.style.display = "block";
                            counter++;
                        } else {
                            carte.style.display = "none";
                        }
                    });

                    let msgFiltreVide = document.querySelector("#msgFiltreVide");

                    if(counter == 0) {
                        msgFiltreVide.style.display = "block";
                    } else {
                        msgFiltreVide.style.display = "none";
                    }
                }

            document.addEventListener('DOMContentLoaded', (event) => {
                var nomL = [
                    @foreach ($logementsRecents as $logement)
                        {
                            libelle: "{{ $logement->libelle_logement }}",
                        },
                    @endforeach
                ];

                document.getElementById('rechercheLogement').addEventListener('input', function(e) {
                    let recherche = e.target.value.toLowerCase();
                    let cartes = document.querySelectorAll('.autres .lienCard');

                    cartes.forEach((carte, index) => {
                        let nom = nomL[index].libelle.toLowerCase();

                        // Vérifie si la carte est actuellement visible
                        if (carte.style.display !== "none") {
                            if (nom.includes(recherche)) {
                                carte.style.display = "block";
                            } else {
                                carte.style.display = "none";
                            }
                        }

                        // Si le champ de recherche est vide, réapplique le filtre de prix
                        if (recherche === '') {
                            let prixSlider = document.getElementById('prixSlider');
                            let prixMin = Math.round(prixSlider.noUiSlider.get()[0]);
                            let prixMax = Math.round(prixSlider.noUiSlider.get()[1]);
                            filtrePrix(prixMin, prixMax);
                        }
                    });
                });
            });
        </script>
    <button id="btnTriPrix" onclick="triPrix()">Trier par prix croissant</button>
    <button id="btnTriNote" onclick="triNote()">Trier par note croissante</button>
    <input type="text" id="rechercheLogement" placeholder="Rechercher un logement">
    <select id="selectionFiltre">
        <option value="Aucun">Tous</option>
        <option value="Appartement">Appartements</option>
        <option value="Villa">Villa</option>
        <option value="Maison">Maison</option>
        <option value="Bateau">Bateau</option>
        <option value="Mhote">Maison d'hôte</option>
        <option value="Chote">Chambre d'hôte</option>
        <option value="Cabane">Cabane</option>
        <option value="Caravane">Caravane</option>
    </select>
    <div id="prixSlider"></div>
        <div class="liste-card">
            @foreach ($logementsRecents as $logement)
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}" ville="{{$logement->ville_logement}}"></x-Card>
            @endforeach
            <p id="msgFiltreVide" style="display: none;">Aucun logement ne correspond à vos critères de recherche</p>
            <script>
                function filtre() {
                    let ListeCard = document.querySelectorAll(".autres .lienCard");
                    let tabCard = Array.from(ListeCard);
                    let selectionFiltre = document.querySelector("#selectionFiltre");
                    let filtre = selectionFiltre.value;
                    let counter = 0;

                    tabCard.forEach((carte) => {
                        if (filtre == "Aucun") {
                            carte.style.display = "block";
                            counter++;
                        }else if(carte.classList[2] != filtre) {
                            carte.style.display = "none";
                        } else {
                            carte.style.display = "block";
                            counter++;
                        }
                    });

                    let msgFiltreVide = document.querySelector("#msgFiltreVide");

                    if(counter == 0) {
                        msgFiltreVide.style.display = "block";
                    } else {
                        msgFiltreVide.style.display = "none";
                    }
                }

                let select = document.getElementById("selectionFiltre");
                select.addEventListener("change", filtre);
            </script>
        </div>
    </section>

    <x-Footer_client></x-Footer_client>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
