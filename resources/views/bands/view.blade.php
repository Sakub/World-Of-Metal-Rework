@extends('layouts.app')
@section('content')
    <div class="content mx-auto row mt-5 band__content">
        <div class="content__leftSection col">
            <div class="content__imageWrapper">
                <img src="{{asset($band->image_url)}}" alt="{{$band->name}}" class="content__image">
                <div class="content__imageWrapper--overlay">
                    <p class="band__info text-white font-weight-bold">Genre: {{$band->genre}}</p>
                    <p class="band__info text-white font-weight-bold">Nationality: {{$band->nationality}}</p>
                    <p class="band__info band__rating text-white font-weight-bold">Rating: {{$band->rating}} <i class="bi bi-star-fill"></i></p>
                    <p class="band__info band__description text-white font-weight-bold">{{$band->description}}</p>
                </div>
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
            <p class="font-weight-bold text-white text-right h2">List of albums:</p>
            @if (!$band->albums)
                <p class="text-white text-right">This band hasn't released any albums yet</p>
            @else
                <div class="content__albums" data-simplebar>
                    @php $i = 1; @endphp
                    @foreach ($band->albums as $album)
                    <a href="{{route("albums.show", $album->id)}}">
                        <div class="content__album text-white font-weight-bold">
                            <p class="album__iterator">{{ $i }}.</p>
                            <p class="album__title"><span class="album__rating"> {{ $album->rating }} <i class="bi bi-star-fill"></span></i>{{ $album->name }}</p>
                        </div>
                    </a>
                        @php $i++; @endphp
                    @endforeach
                </div>  
            @endif
           
            
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bandView.css') }}">
@endpush