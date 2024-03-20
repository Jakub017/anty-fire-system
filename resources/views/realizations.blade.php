@extends('layouts.main')

@section('title', "Strona główna - FPROTECT")

@section('content')

<div id="portfolio" class="section portfolio portfolio--page">
    <div class="portfolio__wrapper">
        <div class="portfolio__intro">
            <div class="portfolio__headings">
                <h1 class="section__heading portfolio__subheading">Nasze realizacje</h1>
            </div>
        </div>
        <div class="portfolio__items">
            @foreach($realizations as $realization)
            <div class="portfolio__item portfolio__item--active">
                <img src="{{Voyager::image($realization->main_image)}}" alt="" class="portfolio__image">
                <div class="portfolio__info">
                    <h3 class="portfolio__name">{{ $realization->name }}</h3>
                    <p class="portfolio__description">{{ $realization->excerpt }}</p>
                    <a href="{{route('realization', $realization->slug)}}" class="portfolio__link">Szczególy
                        realizacji</a>
                    <span class="portfolio__location"></span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/scripts.js')}}"></script>
@endsection
