<a class="lienCard" href="{{$lien}}">
    <div class="cardLogement">
        <img src="{{asset('/img/logements/logement' . $id . '/couverture.jpg')}}" alt="Image de couverture de la maison">

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