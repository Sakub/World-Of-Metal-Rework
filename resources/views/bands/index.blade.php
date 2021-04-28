@extends('layouts.app')
@section('content')
    <div class="content mx-auto bands__content">
        <div class="row justify-content-between">
            <p class="section__heading text-custom-primary font-weight-bold">Filters:</p>
            <p class="section__viewMore text-white font-weight-bold">Artists</p>
        </div>
        <div class="row">
            <div class="content__filters">
                <input type="text" placeholder="Search..." class="filters__searchbar text-custom-primary bg-transparent rounded-pill">
                <ul class="filters__radio-wrapper mt-3">
                    <li><input type="radio" checked name="filter" id="filters__best" class="filters__filter"><label for="filters__best" class="filter__label">Best</label></li>
                    <li><input type="radio" name="filter" id="filters__worst" class="filters__filter"><label for="filters__worst" class="filter__label">Worst</label></li>
                    <li><input type="radio" name="filter" id="filters__newest" class="filters__filter"><label for="filters__newest" class="filter__label">Newest</label></li>
                    <li><input type="radio" name="filter" id="filters__oldest" class="filters__filter"><label for="filters__oldest" class="filter__label">Oldest</label></li>
                    <li><input type="radio" name="filter" id="filters__nameAsc" class="filters__filter"><label for="filters__nameAsc" class="filter__label">A-Z</label></li>
                    <li><input type="radio" name="filter" id="filters__nameDesc" class="filters__filter"><label for="filters__nameDesc" class="filter__label">Z-A</label></li>
                </ul>


                {{ $bands->render() }}
            </div>
            <div class="content__bands">
                <div class="row justify-content-end">
                    @foreach($bands as $band)
                        <div class="band" data-name="{{$band->name}}">
                            <a href="{{route('bands.show', $band->id)}}">
                                <img src="{{asset($band->image_url)}}" alt="{{$band->name}}" class="band__image">
                                <div class="band__overlay text-white">
                                    <div class="band__name">{{$band->name}}</div>
                                    <div class="band__rating font-weight-bold">{{$band->rating}} <i class="bi bi-star-fill"></i></div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
