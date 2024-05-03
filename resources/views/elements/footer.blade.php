<div class="footer">
    <div class="footer__wrapper">
        <div class="footer__column">
            <img src="{{asset('storage/'.setting('strona.logo'))}}" alt="" class="footer__logo">
            <p class="footer__text">{{ setting('strona.footer_text') }}</p>
        </div>
        <div class="footer__column">
            <h4 class="footer__heading">Szybki Dostęp</h4>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="{{route('home')}}#o-nas" class="footer__link">O nas</a>
                </li>
                <li class="footer__item">
                    <a href="{{route('home')}}#uslugi" class="footer__link">Usługi</a>
                </li>
                <li class="footer__item">
                    <a href="{{route('home')}}#realizacje" class="footer__link">Realizacje</a>
                </li>
                <li class="footer__item">
                    <a href="{{route('home')}}#faq" class="footer__link">FAQ</a>
                </li>
                <li class="footer__item">
                    <a href="{{route('contact')}}" class="footer__link">Kontakt</a>
                </li>
            </ul>
        </div>
        <div class="footer__column">
            <h4 class="footer__heading">Producenci</h4>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="#" class="footer__link">Siemens AG</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Tyco International</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Honeywell</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Johnson Controls</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Bosch Security</a>
                </li>
            </ul>
        </div>
        <div class="footer__column">
            <h4 class="footer__heading">Baza wiedzy</h4>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="#" class="footer__link">Sprinklery 101</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Przepisy PPOŻ</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Gaśnice: Rodzaje</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">FAQ Bezpieczeństwa</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Normy i Prawo</a>
                </li>
            </ul>
        </div>

    </div>
    <div class="footer__bottom">
        <span class="footer__copyright">&copy; FPROTECT 2024 - Wszelkie prawa zastrzeżone. Projekt i Realizacja: <a
                class="footer__author" target="_blank" href="https://webcrafts.pl">Webcrafts.pl</a> - <a
                class="footer__author" target="_blank" href="https://lipinskijakub.pl">Jakub
                Lipiński</a></span>
        <a href="{{route('privacy')}}" target="_blank" class="footer__privacy">Polityka prywatności</a>
    </div>
</div>
