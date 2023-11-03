@extends('layouts.main')

@section('content')
<div class="hero">
    <div class="hero__wrapper">
        <div class="hero__text">
            <h1 class="hero__heading">Lorem ipsum dolor sit amet sit Lorem</h1>
            <p class="hero__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam doloribus
                numquam incidunt magni labore?
                Eius a vero quos molestias quasi asperiores animi.</p>
            <div class="hero__buttons">
                <a class="hero__button" href="#">Usługi</a>
                <a class="hero__button hero__button--empty" href="#">Kontakt z nami</a>
            </div>

        </div>
    </div>
</div>

<div class="section about">
    <div class="about__wrapper">
        <div class="about__text">
            <h2 class="section__subheading">o nas</h2>
            <h1 class="section__heading">Twoje Bezpieczeństwo i Ochrona -
                Nasza Misja. <span class="section__underline">Jesteśmy Ekspertami</span>
            </h1>
            <p class="about__description">Jesteśmy ekspertami w dziedzinie zabezpieczeń budynków i systemów
                przeciwpożarowych, z wieloletnim doświadczeniem na rynku. Nasza firma oferuje kompleksowe rozwiązania,
                mające na celu ochronę życia i mienia przed niespodziewanymi sytuacjami.</p>
            <p class="about__description">Specjalizujemy się w
                projektowaniu, instalacji i serwisowaniu systemów przeciwpożarowych, systemów alarmowych oraz
                zabezpieczeń budynków. Nasza misja to zapewnienie najwyższego poziomu bezpieczeństwa, zgodnie z
                najnowszymi standardami i regulacjami. Pracujemy z pasją i zaangażowaniem, aby każdy nasz klient czuł
                się bezpiecznie i pewnie.</p>
            </p>
        </div>
        <img class="about__image" src="{{asset('img/tlo2.jpg')}}" alt="">
    </div>
</div>

<div class="section services">
    <div class="services__wrapper">
        <h2 class="section__subheading services__subheading">usługi</h2>
        <h1 class="section__heading services__subheading">Obszary naszej działalności</h1>
        <div class="services__items">
            <div class="services__item">
                <img class="services__image" src="{{asset('img/audit.png')}}">
                <h3 class="services__title">Audyt Bezpieczeństwa Budynku</h3>
                <p class="services__description">Analiza ryzyka, kontrola zabezpieczeń i doradztwo w zakresie
                    bezpieczeństwa budynku. Zapewniamy spokój i zgodność z normami. Oferujemy profesjonalizm i
                    doświadczenie.</p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/alarm.png')}}">
                <h3 class="services__title">Instalacja Systemów Alarmowych</h3>
                <p class="services__description">Projektowanie i montaż nowoczesnych systemów alarmowych. Ochrona przed
                    włamaniem i innymi zagrożeniami. Działamy szybko i sprawnie. Bezpieczeństwo na wyciągnięcie ręki.
                </p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/tools.png')}}">
                <h3 class="services__title">Serwis Sprzętu Przeciwpożarowego</h3>
                <p class="services__description">Kompleksowa obsługa i konserwacja sprzętu przeciwpożarowego. Gwarancja
                    sprawności i niezawodności. Ochrona życia i mienia w każdych warunkach. Zawsze gotowi do działania.
                </p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/building.png')}}">
                <h3 class="services__title">Montaż Zabezpieczeń Budynków
                </h3>
                <p class="services__description">Skuteczne zabezpieczenia okien, drzwi i ścian. Ochrona przed włamaniem
                    i uszkodzeniami. Doradztwo i profesjonalny montaż. Twój budynek bezpieczny jak nigdy dotąd.
                </p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/training.png')}}">
                <h3 class="services__title">Szkolenia z Bezpieczeństwa</h3>
                <p class="services__description">Praktyczne kursy z zakresu bezpieczeństwa pożarowego. Uczymy jak
                    reagować w sytuacjach zagrożenia. Zwiększ swoją świadomość i bądź zawsze gotów.</p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/smart.png')}}">
                <h3 class="services__title">Inteligentna Automatyka Budynku</h3>
                <p class="services__description">Systemy zarządzania budynkiem, automatyzacja i kontrola dostępu.
                    Nowoczesne technologie dla komfortu i bezpieczeństwa. Twoje mienie pod stałą ochroną.</p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
        </div>
    </div>
</div>

@endsection
