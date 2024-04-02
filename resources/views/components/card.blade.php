<a class="lienCard {{$prix}} {{$natLogement}} {{$note}} {{$ville}} {{$id}} {{$titre}}" href="{{route('details', ['id' => $id])}}">
    <div class="cardLogement">
        <img src="{{asset('storage/logement' . $id . '/img0.jpg')}}" alt="Image de couverture de la maison">

        <div>
            <div class="premLigne">
                <h3>{!!$titre!!}</h3>
                <div class="note">
                    <p>{{$note}}</p>
                    <i class="icon"></i>
                </div>            
            </div>
            <div class="desc">
                <p>{!!$desc!!}</p>
            </div>
        </div>
        <div class="prix">
            <p><strong>{{$prix}}</strong> € par nuit</p>
        </div>
    </div> 
</a>