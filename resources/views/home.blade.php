@extends('layouts.main')

@section('title', "Strona główna - FPROTECT")

@section('content')
<div class="hero">
    <div class="hero__wrapper">
        <div class="hero__text">
            <h1 class="hero__heading">Lorem ipsum dolor sit amet sit Lorem</h1>
            <p class="hero__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam doloribus
                numquam incidunt magni labore?
                Eius a vero quos molestias quasi asperiores animi.</p>
            <div class="hero__buttons">
                <a class="hero__button hero__button--services">Nasze usługi</a>
                <a class="hero__button hero__button--empty hero__button--contact">Kontakt z nami</a>
            </div>

        </div>
    </div>
</div>

<div id="about" class="section about">
    <div class="about__wrapper">
        <div class="about__text">
            <h2 class="about__subheading section__subheading">o nas</h2>
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
            <a class="about__link" href="#">Dowiedz się więcej</a>
        </div>
        <img class="about__image" src="{{asset('img/tlo2.jpg')}}" alt="">
    </div>
</div>

<div id="services" class="section services">
    <div class="services__wrapper">
        <h2 class="section__subheading services__subheading">usługi</h2>
        <h1 class="section__heading services__subheading">Obszary naszej działalności</h1>
        <div class="services__items">
            @foreach($services as $service)
            <div class="services__item">
                <img class="services__image" src="{{Voyager::image($service->image)}}">
                <h3 class="services__title">{{ $service->name }}</h3>
                <p class="services__description">{{ $service->excerpt }}</p>
                <a href="{{route('service', $service->slug)}}" class="services__link">Dowiedz się więcej</a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div id="portfolio" class="section portfolio">
    <div class="portfolio__wrapper">
        <div class="portfolio__intro">
            <div class="portfolio__headings">
                <h2 class="section__subheading portfolio__subheading">realizacje</h2>
                <h1 class="section__heading portfolio__subheading">Nasze portfolio</h1>
            </div>
            <a href="#" class="portfolio__all">Wszystkie realizacje</a>
        </div>
        <div class="portfolio__items">
            @foreach($realizations as $realization)
            <div class="portfolio__item">
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

<div id="faq" class="section faq">
    <div class="faq__wrapper">
        <img class="faq__image" src="{{asset('img/tlo2.jpg')}}" alt="">
        <div class="faq__text">
            <h2 class="section__subheading">faq</h2>
            <h1 class="section__heading">Najczęściej zadawane pytania</h1>
            <div class="faq__questions">
                @foreach($questions as $index => $question)
                <div class="faq__block">
                    <div class="faq__title">
                        <h3 class="faq__question">{{ $question->question }}</h3>
                        <i
                            class="fa-solid fa-arrow-right faq__button {{ $index == 1 ? 'faq__button--active' : '' }} "></i>
                    </div>
                    <p class="faq__answer {{ $index == 1 ? 'faq__answer--active' : '' }}">{{ $question->answer }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="contact" class="section contact">
    <div class="contact__wrapper">
        <div class="contact__text">
            <h2 class="section__subheading contact__subheading">kontakt</h2>
            <h1 class="section__heading contact__heading">Napisz do nas. Służymy pomocą!</h1>

            <p class="contact__description">Czekamy na wiadomość od Ciebie! Nasz doświadczony zespół jest gotowy
                odpowiedzieć na Twoje pytania i udzielić więcej informacji na temat naszej oferty.</p>
            <div class="contact__links">
                <a href="mailto:{{ setting('kontakt.email') }}" class="contact__link"><i
                        class="fa-solid fa-envelope contact__icon"></i>
                    {{ setting('kontakt.email') }}</a>
                <a href="tel:{{ setting('kontakt.phone') }}" class="contact__link"><i
                        class="fa-solid fa-phone contact__icon"></i>
                    {{ setting('kontakt.phone') }}</a>
            </div>
        </div>
        <form method="POST" action="{{route('contact.send')}}" class="contact__form">
            @csrf
            <div class="contact__input-group">
                <input name="name" type="text" class="contact__input" placeholder="Imię i nazwisko">
                @error('name')
                <span class="contact__error">{{ $message }}</span>
                @enderror
            </div>
            <div class="contact__group">
                <div class="contact__input-group">
                    <input name="email" type="email" class="contact__input" placeholder="Adres email">
                    @error('email')
                    <span class="contact__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="contact__input-group">
                    <input name="phone" type="text" class="contact__input" placeholder="Numer telefonu">
                    @error('phone')
                    <span class="contact__error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <textarea name="message" id="message" class="contact__input contact__input--textarea"
                placeholder="Treść wiadomości"></textarea>
            <div class="contact__group contact__group--checkbox">
                <input class="contact__checkbox" type="checkbox" name="privacy_policy">
                <label for="privacy_policy" class="contact__label">Zapoznałem się z treścią <a
                        class="contact__privacy-link" href="#">polityki
                        prywatności</a> i
                    wyrażam zgodę na
                    przetwarzanie moich danych osobowych.</label>
            </div>
            <button type="submit" class="contact__button">Wyślij wiadomość</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/scripts.js')}}"></script>
@endsection
