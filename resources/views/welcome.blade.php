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
    <link rel="stylesheet" href="https://unpkg.com/leaflet-search@2.9.6/dist/leaflet-search.min.css" />
    <script src="https://unpkg.com/leaflet-search@2.9.6/dist/leaflet-search.min.js"></script>
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
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
            @endforeach
        </div>
    </section>

    <div id="mapid" style="width: 800px; height: 500px;"></div>
    
    <script type="text/javascript">
        var Dinan     = L.marker([48.4500000, -2.0333300], {name: 'Dinan'}).bindPopup('<img src="tresbeau.png" alt="Image Description" class="popup-image"/> This is Dinan.').on('click', function () { this.openPopup(); });
        var Lorient   = L.marker([47.7500000, -3.3666700], {name: 'Lorient'}).bindPopup('<img src="tresbeau.png" alt="Image Description" class="popup-image"/> This is Lorient.').on('click', function () { this.openPopup(); });
        var Rennes    = L.marker([48.1119800, -1.6742900], {name: 'Rennes'}).bindPopup('<img src="tresbeau.png" alt="Image Description" class="popup-image"/> This is Rennes.').on('click', function () { this.openPopup(); });
        var Brest     = L.marker([48.4000000, -4.4833300], {name: 'Brest'}).bindPopup('<img src="tresbeau.png" alt="Image Description" class="popup-image"/> This is Brest.').on('click', function () { this.openPopup(); });

        var villes = L.layerGroup([Dinan, Lorient, Rennes, Brest]);

        var Hennebont = L.marker([47.8051200, -3.2733700], {name: 'Hennebont'}).bindPopup('<img src="tresbeau.png" alt="Image Description" class="popup-image"/> Parc de Ewan, Hennebont.').on('click', function () { this.openPopup(); });
            
        var parcs = L.layerGroup([Hennebont]);

        var markers = [Dinan, Lorient, Rennes, Brest, Hennebont];

        for (var i = 0; i < markers.length; i++) {
            markers[i].on('mouseover', function (e) {
                e.target.setIcon(new L.Icon.Default({ iconSize: [32, 52], iconAnchor: [15, 45] }));
            });

            markers[i].on('mouseout', function (e) {
                e.target.setIcon(new L.Icon.Default({ iconSize: [25, 41], iconAnchor: [12, 41] }));
            });
        }

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        var osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors, Tiles style by Humanitarian OpenStreetMap Team hosted by OpenStreetMap France'
        });

        var openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data: © OpenStreetMap contributors, SRTM | Map style: © OpenTopoMap (CC-BY-SA)'
        });

        var bzh = L.tileLayer('https://tile.openstreetmap.bzh/br/{z}/{x}/{y}.png', {
            maxZoom: 19
        });

        var map = L.map('mapid', {
            center: [47.8051200, -3.2733700],
            zoom: 7 ,
            layers: [osm, villes]
        });

        var baseMaps = {
            "OpenStreetMap": osm,
            "<span style='color: red'>OpenStreetMap.HOT</span>": osmHOT,
            "BZH": bzh
        };

        var overlayMaps = {
            "Villes": villes,
            "<span style='color: green'>Parc</span>": parcs
        };

        var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);

        layerControl.addBaseLayer(openTopoMap, "OpenTopoMap");

        var searchControl = new L.Control.Search({
            layer: villes,
            propertyName: 'name',
            marker: false,
            moveToLocation: function(latlng, title, map) {
                map.setView(latlng, 13);
            }
        });

        searchControl.on('search:locationfound', function(e) {
            e.layer.openPopup();
        });

        map.addControl(searchControl);
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
                <x-Card titre="{{$logement->libelle_logement}}" desc="{{$logement->accroche_logement}}" note="{{$logement->moyenne_avis_logement}}" prix="{{$logement->prix_logement}}" lien="{{$logement->lien}}" id="{{$logement->id}}" natLogement="{{$logement->nature_logement}}"></x-Card>
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