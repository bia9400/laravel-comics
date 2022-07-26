@php
$links = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];
@endphp

<div class="row py-3">
    <div class="col d-flex justify-content-center">
        <div class="logo">
            <img src="{{asset("images/dc-logo.png")}}" alt="" />
        </div>
    </div>
    <div class="col-7 d-flex  ">
        <ul class="d-flex list-unstyled"> 
          @foreach ($links as $link)
            <li class="text-uppercase px-3 align-self-center"><a href="#">
                   
                    {{$link}}
                    
                </a></li>
                @endforeach
        </ul>
    </div>
</div>
</div>
