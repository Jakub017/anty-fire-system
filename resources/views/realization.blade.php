@extends('layouts.main')

@section('title', "$realization->name - FPROTECT")

@section('content')

<div class="realization">
    <div class="realization__content">
        <div
            class="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff mySwiper2 realization__main-gallery">
            <div class="swiper-wrapper">
                <img src="{{Voyager::image($realization->main_image)}}" alt=""
                    class="swiper-slide realization__main-image">
                @foreach(json_decode($realization->gallery) as $image)
                <img src="{{Voyager::image($image)}}" class="swiper-slide realization__main-image">
                @endforeach
            </div>
        </div>





        <div class="mySwiper realization__gallery">
            <div class="swiper-wrapper realization__gallery-container">
                <img src="{{Voyager::image($realization->main_image)}}" class="swiper-slide realization__gallery-image">
                @foreach(json_decode($realization->gallery) as $image)
                <img src="{{Voyager::image($image)}}" class="swiper-slide realization__gallery-image">
                @endforeach
            </div>
        </div>
        <h2 class="realization__name">{{ $realization->name }}</h2>
        <p class="realization__excerpt">{{ $realization->excerpt }}</p>

        <div class="realization__body">
            <h4 class="realization__heading">Opis realizacji:</h4>
            {!! $realization->content !!}
        </div>
    </div>
    <div class="realization__sidebar">
        <div class="realization__block">
            <h4 class="realization__title">Szczegóły</h4>
            <div class="realization__detail">
                <img class="realization__icon" src="{{asset('img/date.png')}}">
                <p class="realization__text"><b>Data:
                    </b>{{ \Carbon\Carbon::parse($realization->date)->format('d.m.Y') }}
                </p>
            </div>
            <div class="realization__detail">
                <img class="realization__icon" src="{{asset('img/client.png')}}">
                <p class="realization__text"><b>Klient: </b>{{ $realization->client }}</p>
            </div>
            <div class="realization__detail">
                <img class="realization__icon" src="{{asset('img/location.png')}}">
                <p class="realization__text"><b>Miasto: </b>{{ $realization->city }}</p>
            </div>
            <div class="realization__detail">
                <img class="realization__icon" src="{{asset('img/budget.png')}}">
                <p class="realization__text"><b>Budżet: </b>{{ $realization->budget }}</p>
            </div>
        </div>
        <div class="realization__block">
            <h4 class="realization__title">Kontakt z nami</h4>
            <div class="realization__contact">
                <img src="{{asset('img/phone.png')}}" alt="" class="realization__contact-icon">
                <div class="realization__contact-text">
                    <p class="realization__contact-title">Telefon</p>
                    <a href="tel:{{ setting('kontakt.phone') }}"
                        class="realization__contact-link">{{ setting('kontakt.phone') }}</a>
                </div>
            </div>
            <div class="realization__contact">
                <img src="{{asset('img/mail.png')}}" alt="" class="realization__contact-icon">
                <div class="realization__contact-text">
                    <p class="realization__contact-title">E-mail</p>
                    <a href="mailto:{{ setting('kontakt.email') }}"
                        class="realization__contact-link">{{ setting('kontakt.email') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset('js/scripts.js')}}"></script>

<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
    });
    const swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
    });

</script>
@endsection
