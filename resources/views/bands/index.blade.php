@extends('layouts.app')
@section('content')
<div class="content mx-auto bands__content">
    <div class="row justify-content-between">
        <p class="section__heading text-custom-primary font-weight-bold">Filters:</p>
        <p class="section__viewMore text-white font-weight-bold">Artists</p>
    </div>
    <div class="row">
        <div class="content__filters">

        </div>
        <div class="content__bands">
            <div class="row justify-content-end">
                @foreach($bands as $band)
                    <div class="band">
                        <a href="{{route('bands.show', $band->id)}}">
                            <img src="{{asset($band->image_url)}}" alt="{{$band->name}}" class="band__image">
                            <div class="band__overlay text-white">
                                <div class="band__name">{{$band->name}}</div>
                                <div class="band__rating font-weight-bold">{{$band->rating}} <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</div>

@endsection
