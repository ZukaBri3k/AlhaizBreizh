<div class="devis">
    <a class="vignette" href="{{route('details', ['id' => $id])}}">
        <img src="{{asset('/img/logements/logement' . $id . '/couverture.jpg')}}" alt="photo du logement">
        <p>{{$libelle}}</p>
    </a>
    <p>{{$pseudo}}</p>
    <p>{{$dated}}</p>
    <p>{{$datef}}</p>
    <div class="btn">
        <a href="#" class="validerDevis">Accepter le devis</a>
        <a href="#" class="refuserDevis">Refuser le devis</a>
    </div>
</div>