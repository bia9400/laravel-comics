@extends('layouts.app');

@section('nomeTitolo', $fumetto['title'])

@section('page_content')
    <div class="jumbo">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
    </div>
    <div class=" headerblue py-5">
        <div class="my-container position-relative ">
            <div class="position-absolute">
                <img class="img-fluid" src="{{ $fumetto['thumb'] }}" alt="">
            </div>
        </div>
    </div>
    <div class="my-container py-5 d-flex justify-content-between">
        <div class="w-75">
            <h2>{{ $fumetto['title'] }}</h2>
            <div style="border-bottom:1px solid black" class="row green-bg px-3 py-2">
                <div class="col  ">
                    <div class="d-flex justify-content-between">
                        <span>U.S Price: <strong>{{ $fumetto['price'] }}</strong></span>
                        <span>AVAILBLE</span>
                    </div>

                </div>
                <div class="col-3">
                    <a href="">Check Availability</a>
                </div>

            </div>
            <p class="text-black py-3">
                {{ $fumetto['description'] }}
            </p>

        </div>
        <div class="position-relative">
            <div class="text-end text-black">
                <h6>ADVERTISEMENT</h6>
            </div>
            <img src="{{ $fumetto['thumb'] }}" alt="">
            <div class="position-absolute my-button">
                <a class="btn btn-primary  rounded-0" role="button" aria-disabled="true">APPLY NOW</a>
            </div>
            <div class="position-absolute float-text">
                <div class="w-50">
                    <h3 class="text-white">UNLEASH HEROIC REWARDS</h3>
                </div>
            </div>
        </div>

    </div>
    <div class="greyer">
        <div class="my-container">
            <div class="row text-black">
                <div class="col">
                    <h4>Talent</h4>
                    <div class="d-flex flex-column">
                        <div class="myrow row">
                            <div class="col-3"><span>Art by:</span></div>
                            <div class="col">
                                @foreach ($fumetto["artists"] as $key=> $item )
                                    
                                    @if ($key<count($fumetto["artists"])-1)
                                       <span>{{$item}},</span>
                                    @else 
                                    <span>{{$item}}</span>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </div>
                        <div class="myrow row">
                            <div class="col-3"><span>Written by:</span></div>
                            <div class="col">
                                @foreach ($fumetto["writers"] as $key=> $item )
                                    
                                    @if ($key<count($fumetto["writers"])-1)
                                       <span>{{$item}},</span>
                                    @else 
                                    <span>{{$item}}</span>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>Specs</h4>
                    <div class="d-flex flex-column">
                        <div class="myrow row">
                            <div class="col-3"><span>Series:</span></div>
                            <div class="col"> <a style="text-decoration: none" href="">{{$fumetto["series"]}}</a></div>
                        </div>
                        <div class="myrow row">
                            <div class="col-3"><span>U.S Price:</span></div>
                            <div class="col">{{$fumetto["price"]}}</div>
                        </div>
                        <div class="myrow row">
                            <div class="col-3"><span>On Sale Date:</span></div>
                            <div class="col">{{$fumetto["sale_date"]}}</div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
