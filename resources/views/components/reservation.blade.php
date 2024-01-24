<div class="devis {{$dated}}">
    <a class="vignette" href="{{route('details', ['id' => $id])}}">
        <img src="{{asset('/img/logements/logement' . $id . '/couverture.jpg')}}" alt="photo du logement">
        <p>{!!$libelle!!}</p>
    </a>
    <p><strong>Client :</strong> {!!$pseudo!!}</p>
    <p><strong>Du</strong> {{$dated}}</p>
    <p><strong>au</strong> {{$datef}}</p>
    <p><strong>{{$prix}} €</strong></p>
</div>