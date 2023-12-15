@extends('layouts.main')

@section('title', "Antyfire System")

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
            <div class="services__item">
                <img class="services__image" src="{{asset('img/audit.png')}}">
                <h3 class="services__title">Audyt Bezpieczeństwa Budynku</h3>
                <p class="services__description">Analiza ryzyka, kontrola zabezpieczeń i doradztwo w zakresie
                    bezpieczeństwa budynku. Zapewniamy spokój i zgodność z normami.</p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/alarm.png')}}">
                <h3 class="services__title">Instalacja Systemów Alarmowych</h3>
                <p class="services__description">Projektowanie i montaż nowoczesnych systemów alarmowych. Ochrona przed
                    włamaniem i innymi zagrożeniami. Działamy szybko i sprawnie.
                </p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
            <div class="services__item">
                <img class="services__image" src="{{asset('img/tools.png')}}">
                <h3 class="services__title">Serwis Sprzętu Przeciwpożarowego</h3>
                <p class="services__description">Kompleksowa obsługa i konserwacja sprzętu przeciwpożarowego. Gwarancja
                    sprawności i niezawodności. Ochrona życia i mienia w każdych warunkach.
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
                    Nowoczesne technologie dla komfortu i bezpieczeństwa.</p>
                <a href="#" class="services__link">Dowiedz się więcej</a>
            </div>
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
            <div class="portfolio__item">
                <img src="{{asset('img/realizacja.jpg')}}" alt="" class="portfolio__image">
                <div class="portfolio__info">
                    <h3 class="portfolio__name">Nazwa realizacji</h3>
                    <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        tempora vero maiores rerum numquam in, minus provident suscipit deleniti quis repellat.</p>
                    <a href="#" class="portfolio__link">Szczególy realizacji</a>
                    <span class="portfolio__location"></span>
                </div>
            </div>
            <div class="portfolio__item">
                <img src="{{asset('img/realizacja.jpg')}}" alt="" class="portfolio__image">
                <div class="portfolio__info">
                    <h3 class="portfolio__name">Nazwa realizacji</h3>
                    <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        tempora vero maiores rerum numquam in, minus provident suscipit deleniti quis repellat.</p>
                    <a href="#" class="portfolio__link">Szczególy realizacji</a>
                </div>
            </div>
            <div class="portfolio__item">
                <img src="{{asset('img/realizacja.jpg')}}" alt="" class="portfolio__image">
                <div class="portfolio__info">
                    <h3 class="portfolio__name">Nazwa realizacji</h3>
                    <p class="portfolio__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        tempora vero maiores rerum numquam in, minus provident suscipit deleniti quis repellat.</p>
                    <a href="#" class="portfolio__link">Szczególy realizacji</a>
                </div>
            </div>
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
                <div class="faq__block">
                    <div class="faq__title">
                        <h3 class="faq__question">Jakie technologie stosujecie w nowoczesnych systemach alarmowych
                            przeciwpożarowych?</h3>
                        <i class="fa-solid fa-arrow-right faq__button"></i>
                    </div>
                    <p class="faq__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, neque ab
                        itaque deserunt quidem quod architecto totam facilis eveniet assumenda similique.</p>
                </div>
                <div class="faq__block">
                    <div class="faq__title">
                        <h3 class="faq__question">Jakie są standardy i regulacje, z którymi są zgodne Wasze systemy
                            zabezpieczeń budynków?</h3>
                        <i class="fa-solid fa-arrow-right faq__button faq__button--active"></i>
                    </div>
                    <p class="faq__answer faq__answer--active">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Temporibus, neque ab
                        itaque deserunt quidem quod architecto totam facilis eveniet assumenda similique.</p>
                </div>
                <div class="faq__block">
                    <div class="faq__title">
                        <h3 class="faq__question">Czy oferujecie szkolenia z zakresu obsługi i konserwacji sprzętu
                            przeciwpożarowego?</h3>
                        <i class="fa-solid fa-arrow-right faq__button"></i>
                    </div>
                    <p class="faq__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, neque ab
                        itaque deserunt quidem quod architecto totam facilis eveniet assumenda similique.</p>
                </div>
                <div class="faq__block">
                    <div class="faq__title">
                        <h3 class="faq__question">Czy oferujecie szkolenia z zakresu obsługi i konserwacji sprzętu
                            przeciwpożarowego?</h3>
                        <i class="fa-solid fa-arrow-right faq__button"></i>
                    </div>
                    <p class="faq__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, neque ab
                        itaque deserunt quidem quod architecto totam facilis eveniet assumenda similique.</p>
                </div>
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
                <a href="mailto:biuro@antyfiresystem.pl" class="contact__link"><i
                        class="fa-solid fa-envelope contact__icon"></i>
                    biuro@antyfiresystem.pl</a>
                <a href="tel:+48123456789" class="contact__link"><i class="fa-solid fa-phone contact__icon"></i>
                    +48 123 456 789</a>
            </div>
        </div>
        <form action="#" class="contact__form">
            @csrf
            <input name="name" type="text" class="contact__input" placeholder="Imię i nazwisko">
            <div class="contact__group">
                <input name="email" type="email" class="contact__input" placeholder="Adres email">
                <input name="phone" type="text" class="contact__input" placeholder="Numer telefonu">
            </div>
            <textarea name="message" id="message" class="contact__input contact__input--textarea"
                placeholder="Treść wiadomości"></textarea>
            <button type="submit" class="contact__button">Wyślij wiadomość</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/scripts.js')}}"></script>
@endsection
