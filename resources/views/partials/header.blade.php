@php
$links = ['CHARACTERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];
@endphp
<div class="headerblue">
    <div class="container">
        <div class="d-flex justify-content-end">
            <a class="px-3" href="">DC POWER VISA</a>
            <a class="px-3" href="">ADDITIONAL DC SITES</a>
        </div>
    </div>

</div>
<div class="container">
<div class="row py-3 align-items-baseline">
    <div class="col d-flex justify-content-center">
        <div class="logo">
            <img src="{{asset("images/dc-logo.png")}}" alt="" />
        </div>
    </div>
    <div class="col d-flex  ">
        <ul class="d-flex list-unstyled"> 
          @foreach ($links as $link)
            <li class="text-uppercase px-3 align-self-center"><a href="#">
                   
                    {{$link}}
                    
                </a></li>
                @endforeach
        </ul>
    </div>
    <div class="col d-flex ">
        <input class="form-control me-2 " type="search" placeholder="Search &#128269; " aria-label="Search ">
    </div>
</div>
</div>
</div>
