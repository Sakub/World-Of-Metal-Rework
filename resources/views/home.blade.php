@extends('layouts.app')
@section('content')
    <div class="hero">
        <div class="hero__sectionsWrapper text-white">
            <div class="hero__leftSection"><div class="hero__topBandWrapper"><img src="{{URL::asset('img/taimLogo.png')}}" alt="" class="hero__topBand"></div></div>
            <div class="hero__rightSection">
                <h1 class="hero__header font-weight-bold"><span class="text-custom-primary">Discover</span> metal artists and albums from all around the world.</h1>
                <div class="text-right w-75 mt-4">
                    <button class="btn hero__button rounded-pill text-white"><span class="h3 font-weight-bold p-3">EXPLORE NOW</span></button>
                </div>
            </div>
        </div>
        <div class="hero__footer text-white">
            <a href="#" class="mx-auto mb-5">
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
    <div class="container">
        <div class="display-4">hello world</div>
    </div>
@endsection