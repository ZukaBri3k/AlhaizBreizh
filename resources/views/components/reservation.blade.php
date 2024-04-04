<div class="devis {{$dated}} {{$natlogement}}">
    <a class="vignette" href="{{route('details', ['id' => $id])}}">
        <img src="{{asset('storage/logement' . $id . '/img0.jpg')}}" alt="photo du logement">
        <p>{!!$libelle!!}</p>
    </a>
    <p><strong>Client :</strong> {!!$pseudo!!}</p>
    <p><strong>Du</strong> {{$dated}}</p>
    <p><strong>au</strong> {{$datef}}</p>
    <p><strong>{{$prix}} €</strong></p>
    <div id="lesboutons">
        <button id="btnTriPrix" onclick="window.location.href='{{ route('retourAvis', ['id' => $id]) }}'">Écrire un avis</button>
    </div>
</div>