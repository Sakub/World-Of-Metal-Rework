@extends('layouts.app')
@section('content')
    <div class="content mx-auto row mt-5">
        <div class="content__leftSection col">
            <div class="content__imageWrapper">
                <img src="{{asset($band->image_url)}}" alt="{{$band->name}}" class="content__image">
            </div>
            <p class="band__title text-white font-weight-bold h4 py-3 mb-0">{{$band->name}}</p>
            <div class="content__rating" data-rating="{{$band->rating}}">
                <p class="text-white">Give this band a rating: </p>
                <div class="content__starsWrapper">
                    @for ($i = 5; $i >= 1; $i--)
                        <i class="bi bi-star-fill h2 content__star" style="order: {{ $i }}" data-rate="{{ $i }}"></i>
                    @endfor
                </div>
                
            </div>
        </div>
        <div class="content__rightSection col">
            <p class="font-weight-bold text-white text-right">List of albums:</p>
        </div>
    </div>
@endsection