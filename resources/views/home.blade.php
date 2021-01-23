@extends('layouts.app')
@section('content')
<div class="hero">
    <div class="hero__sectionsWrapper text-white">
        <div class="hero__leftSection">
            <div class="hero__topBandWrapper"><img src="{{URL::asset('img/taimLogo.png')}}" alt=""
                    class="hero__topBand"></div>
        </div>
        <div class="hero__rightSection">
            <h1 class="hero__header font-weight-bold"><span class="text-custom-primary">Discover</span> metal artists
                and albums from all around the world.</h1>
            <div class="text-right w-75 mt-4">
                <button class="btn hero__button rounded-pill text-white"><span class="h3 font-weight-bold p-3">EXPLORE
                        NOW</span></button>
            </div>
        </div>
    </div>
    <div class="hero__footer text-white">
        <a href="#content" class="mx-auto mb-5">
            <div class="hero__footer__mouse"></div>
        </a>
        <div class="hero__footer__icons">
            <a href="#" class="mr-2">
                <i class="bi bi-facebook text-custom-primary h1 hero__footer__icon"></i>
            </a>
            <a href="#" class="mr-4">
                <i class="bi bi-github text-custom-primary h1 hero__footer__icon"></i>
            </a>
        </div>
    </div>
</div>
<div class="mt-5 mx-auto content" id="content">
    <div class="topArtists">
        <div class="row">
            <div class="w-50">
                <p class="topArtists__heading section__heading text-custom-primary font-weight-bold">Top artists</p>
            </div>
            <div class="w-50">
                <p class="topArtists__viewMore section__viewMore text-right"><a href="{{route('bands.index')}}" class="text-white font-weight-bold text-decoration-none">View more</a></p>
            </div>
        </div>
        <div class="row topArtists__bands justify-content-center">
            @foreach ($bands as $band)
                <div class="topArtists__band mx-2">
                    <div class="band__imageWrapper">
                        <a href="{{route("bands.show", $band->id)}}">
                            <img src="{{URL::asset($band->image_url)}}" alt="{{$band->name}}" class="band__image">
                        </a>
                    </div>
                    <div class="row font-weight-bold band__caption m-0 pt-2 justify-content-between">
                        <p class="band__title text-white mb-0">{{$band->name}}</p>
                        <p class="band__rating text-warning mb-0">{{$band->rating}}<i class="bi bi-star-fill"></i></p>
                    </div>
                </div>
            @endforeach
          
           
            
            
        </div>
    </div>
    @endsection
