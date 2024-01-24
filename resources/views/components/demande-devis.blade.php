<div class="devis">
    <a class="vignette" href="{{route('details', ['id' => $id])}}">
        <img src="{{asset('/img/logements/logement' . $id . '/couverture.jpg')}}" alt="photo du logement">
        <p>{{$libelle}}</p>
    </a>
    <p>client : {{$pseudo}}</p>
    <p>Du {{$dated}}</p>
    <p>au {{$datef}}</p>
    <div class="btn">
        <a href="{{route('validerDevis', ['id_devis' => $iddevis])}}" class="validerDevis">Accepter le devis</a>
        <a href="{{route('refuserDevis', ['id_devis' => $iddevis, 'id_reserv' => $idreservation])}}" class="refuserDevis">Refuser le devis</a>
    </div>
</div>