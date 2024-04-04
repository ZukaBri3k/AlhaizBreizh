<div class="devis">
    <p><strong>Propriétaire :</strong> {{ $nom_proprio }}</p>
    <a class="vignette" href="{{ route('details', ['id' => $id]) }}">
        <img src="{{ asset('storage/logement' . $id . '/img0.jpg') }}" alt="photo du logement">
        <p>{{ $libelle }}</p>
    </a>
    <p><strong>Du</strong> {{ $dated }}</p>
    <p><strong>au</strong> {{ $datef }}</p>
</div>
