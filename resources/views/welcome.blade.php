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
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}" ville="{{$logement->ville_logement}}"></x-Card>
            @endforeach
        </div>
    </section>

    <div id="mapid" style="height: 500px;">
    </div>
    
    <script type="text/javascript">
    async function getCoordinates(cityName) {
        try {
            const response = await fetch(`https://nominatim.openstreetmap.org/search?city=${cityName}&format=json`);
            const data = await response.json();

            if (data.length > 0) {
                const latitude = parseFloat(data[0].lat);
                const longitude = parseFloat(data[0].lon);
                return [latitude, longitude];
            } else {
                throw new Error("No results found");
            }
        } catch (error) {
            console.error('Error:', error.message);
            throw error; // Rejette l'erreur pour être gérée plus tard
        }
    }

    var logementId = "{{ $logement->id }}";

        async function createMarker(cityName, logementId, imageUrl, housingType, customIcon) {
        const coordinates = await getCoordinates(cityName);

        // Utilisez L.marker avec l'icône personnalisée
        const marker = L.marker(coordinates, {
            icon: customIcon,
            name: cityName,
            housingType: housingType
        });

        const popupContent = document.createElement('div');
        popupContent.innerHTML = '<img src="' + imageUrl + '" alt="Image de couverture de la maison" style="width: 150px;"><br>Logement situé à ' + cityName + '.';
        popupContent.addEventListener('click', function () {
            window.location.href = '/logement/' + logementId + '/details';
        });
        marker.bindPopup(popupContent).on('click', function () { this.openPopup(); });

        return marker;
    }

    document.addEventListener('DOMContentLoaded', async (event) => {
        let ListeCard = document.querySelectorAll(".autres .lienCard");
        let tabCard = Array.from(ListeCard);

        // Récupérez les villes uniques des cartes
        const cities = [];
        const logementTypes = [];
        const markerGroups = {};
        const markers = [];

        const myIcon = L.icon({
            iconUrl: "{{ asset('img/loger.png') }}",
            iconSize: [45, 45],
            iconAnchor: [-1, 40],
            popupAnchor: [24, -40]
        });

        for (const carte of tabCard) {
            const logementId = carte.classList[4];
            const imageUrl = 'https://site-sae-ubisoufte.bigpapoo.com/storage/logement' + logementId + '/img0.jpg';
            const city = carte.classList[3];
            const housingType = carte.classList[2];

            if (city && !cities.includes(city)) {
                cities.push(city);
            }

            if (housingType && !logementTypes.includes(housingType)) {
                logementTypes.push(housingType);
            }

            const marker = await createMarker(city, logementId, imageUrl, housingType, myIcon);

            if (!markerGroups[housingType]) {
                markerGroups[housingType] = L.layerGroup();
            }

            markerGroups[housingType].addLayer(marker);
        }

        console.log(cities); // Affichez les villes pour le débogage
        console.log(logementTypes); // Affichez les types de logements pour le débogage

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team hosted by OpenStreetMap France'
        });

        const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data: © OpenStreetMap contributors, SRTM | Map style: © OpenTopoMap (CC-BY-SA)'
        });

        const bzh = L.tileLayer('https://tile.openstreetmap.bzh/br/{z}/{x}/{y}.png', {
            maxZoom: 19
        });

        const map = L.map('mapid', {
            center: [47.9991200, -3.2733700],
            zoom: 8,
            layers: [osm].concat(Object.values(markerGroups)),
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

        const baseMaps = {
            "carte classique": osm,
            "carte en relief": openTopoMap,
            "carte en breton": bzh,
            "carte humanitaire": osmHOT
        };

        const overlayMaps = {};
        for (const housingType in markerGroups) {
            overlayMaps[housingType] = markerGroups[housingType];
        }

        const layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);

        // Créez le contrôle de recherche initial
        const searchControl = new L.Control.Search({
            layer: L.layerGroup(Object.values(markerGroups).flatMap(group => group.getLayers())),
            propertyName: 'name',
            marker: false,
            moveToLocation: function (latlng, title, map) {
                map.setView(latlng, 13);
            }
        });

        searchControl.on('search:locationfound', function (e) {
            e.layer.openPopup();
        });

        map.addControl(searchControl);

        map.on('overlayadd', function (e) {
            L.layerGroup(Object.values(markerGroups)).addLayer(markerGroups[e.name]);
        });

        map.on('overlayremove', function (e) {
            L.layerGroup(Object.values(markerGroups)).removeLayer(markerGroups[e.name]);
        });
    });
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
            </script>
            <button id="btnTriPrix" onclick="triPrix()">Trier par prix croissant</button>
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
        </div>
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