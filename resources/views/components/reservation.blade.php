<div class="devis {{$dated}} {{$natlogement}}">
    <a class="vignette" href="{{route('details', ['id' => $id])}}">
        <img src="{{asset('storage/logement' . $id . '/img0.jpg')}}" alt="photo du logement">
        <p>{!!$libelle!!}</p>
    </a>
    <p><strong>Client :</strong> {!!$pseudo!!}</p>
    <p><strong>Du</strong> {{$dated}}</p>
    <p><strong>au</strong> {{$datef}}</p>
    <p><strong>{{$prix}} €</strong></p>
    <button onclick="window.location.href='{{ route('creation_avis') }}'" class="btnTriPrix">Écrire un avis</button>
</div>