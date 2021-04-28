@extends('layouts.app')
@section('content')
    <div class="content mx-auto row mt-5 band__content">
        <div class="content__leftSection col">
            <div class="content__imageWrapper">
                <img src="{{asset($album->image_url)}}" alt="{{$album->name}}" class="content__image">
                <div class="content__imageWrapper--overlay">
                    <p class="band__info band__rating text-white font-weight-bold">Rating: {{$album->rating}} <i
                            class="bi bi-star-fill"></i></p>
                    <p class="band__info band__description text-white font-weight-bold">{{$album->description}}</p>
                </div>
            </div>
            <p class="band__title text-white font-weight-bold h4 py-3 mb-0">{{$album->name}}</p>
            <p class="band__title text-white font-weight-bold h6 py-2 mb-2">{{$album->band}}</p>
            <div class="content__rating" data-rating="{{$album->rating}}">
                <p class="text-white">Give this album a rating: </p>
                <div class="content__starsWrapper">
                    @for ($i = 5; $i >= 1; $i--)
                    <i class="bi bi-star-fill h2 content__star" style="order: {{ $i }}" data-rate="{{ $i }}"></i>
                    @endfor
                </div>
            </div>
        </div>
        <div class="content__rightSection col">
            <p class="font-weight-bold text-white text-right h2">List of tracks:</p>
            <div class="content__albums" data-simplebar>
                @for ($i = 1; $i<11; $i++ ) 
                    <div class="content__album text-white font-weight-bold">
                        <p class="album__iterator">{{ $i }}.</p>
                        <p class="album__title"><span class="album__rating"> 5 <i class="bi bi-star-fill"></span></i>Lorem</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bandView.css') }}">
@endpush
