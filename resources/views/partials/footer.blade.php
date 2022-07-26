@php
    $footerArray=[
        [
          "title"=> "DC COMICS",
          "valueArray"=> [
            "characters",
            "comics",
            "movies",
            "tv",
            "games",
            "collectible",
            "videos",
            
          ],
        ],
        [
          "title"=> "DC",
          "valueArray"=> [
            "Terms of Use",
            "Privacy Policies",
            "movies",
            "tv",
            "games",
            "collectible",
            "Privacy Policies",
            "videos",
            "fans",
            "news",
            "shop",
          ],
          ],
        [
          "title"=> "SITES",
          "valueArray"=> [
            "MAD MAGAZINE",
            "DC",
            "DC KIDS",
            "DC UNIVERS",
            "DC POWER VISA",
            
            
          ],
        ],
        [
          "title"=> "SHOP",
          "valueArray"=> [
            "SHOP DC COLLECTIBLES",
            "SHOP DC",
            
            
            
          ],
        ],
      ]
@endphp

<div class="logoContainer px-5">
    <div class="row ">
      <div class="col">
        <div class="row mt-3">
            @foreach ($footerArray as $value)
                
           
          <div  class="col-4">
          <h3>{{$value["title"]}}</h3>
          <ul class="list-unstyled">
           
             
           
                
           
            
          </ul>
          </div>

           @endforeach
        </div>
      </div>
      <div class="col strange-image">
        <img src="{{asset("images/dc-logo-bg.png")}}" alt="">
      </div>
    </div>
  </div>