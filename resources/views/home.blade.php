@extends('layouts.app')

@section('page_content')
    <div class="jumbo">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
    </div>

    <div class=" myBanner pb-5">

        <div class="container text-center relative">
            <div class="current-series">
                <h3>CURRENT SERIES</h3>
            </div>
            <div class="row row-cols-6 py-5">

                @foreach ($fumetti as $fumetto)
                    <div>
                        @include('partials.card')
                        
                    </div>
                @endforeach
                
            </div>
            <button class="btn btn-primary ">Load More</button>
        </div>
    </div>
@endsection
