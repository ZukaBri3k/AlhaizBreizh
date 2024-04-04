<div class="devis {{$dated}} {{$natlogement}}">
    <a class="vignette" href="{{route('details', ['id' => $id])}}">
        <img src="{{asset('storage/logement' . $id . '/img0.jpg')}}" alt="photo du logement">
        <p>{!!$libelle!!}</p>
    </a>
    <p><strong>Client :</strong> {!!$pseudo!!}</p>
    <p><strong>Du</strong> {{$dated}}</p>
    <p><strong>au</strong> {{$datef}}</p>
    <p><strong>{{$prix}} €</strong></p>
    @php
        $avisExist = DB::select('select id_reserv_avis from avis inner join reservation on avis.id_reserv_avis = reservation.id_reserv inner join logement on avis.id_logement_avis = logement.id_logement where id_reserv = ? and id_logement_avis = ?', [$id_reserv, $id_logement]);
    @endphp
    @if ($role == 1)
        @if ($avisExist)
            <button id="btnfiltre" disabled>Vous avez déjà posté un avis</button>
        @else
            <button id="btnfiltre" onclick="window.location.href='{{ route('retourAvis', ['id' => $id]) }}'">Écrire un avis</button>
        @endif
    @endif
</div>