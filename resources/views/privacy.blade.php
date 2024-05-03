@extends('layouts.main')

@section('title', "Polityka prywatności - FPROTECT")

@section('content')

<div class="subpage">

    <div class="subpage__breadcrumbs">
        <img src="{{asset('img/tlo2.jpg')}}" alt="" class="subpage__breadcrumbs-image">
        <h1 class="subpage__breadcrumbs-title">Polityka prywatności</h1>
        <div class="subpage__breadcrumbs-links">
            <a href="{{route('home')}}" class="subpage__breadcrumbs-link">Strona główna</a>
            <span class="subpage__breadcrumbs-separator">></span>
            <span class="subpage__breadcrumbs-text">Polityka prywatności</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="subpage__path" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z" fill="#fff"></path>
        </svg>
    </div>

    <div class="privacy">

        <h4 class="privacy__heading">§.1 Postanowienia Ogólne</h4>
        <ol class="privacy__list">
            <li class="privacy__text">Administratorem danych jest FPROTECT sp. z o.o. (dawniej ANTYFIRESYSTEM) z
                siedzibą w
                43-400
                Cieszyn, ul. Stawowa 71, wpisana do KRS 0000575600, NIP: 5482670686, REGON: 362485267. </li>
            <li class="privacy__text">Ochrona danych odbywa się zgodnie z wymogami powszechnie obowiązujących przepisów
                prawa, a ich przechowywanie ma miejsce na zabezpieczonych serwerach.</li>
            <li class="privacy__text">Dla interpretacji terminów stosuje się słowniczek Regulaminu lub tak jak zostało
                to
                opisane w Polityce Prywatności (jeżeli wynika to bezpośrednio z opisu).</li>
            <li class="privacy__text">Na potrzeby lepszego odbioru Polityki Prywatności termin „Użytkownik” zastąpiony
                został określeniem „Ty”, „Administrator” – „My”. Termin „RODO” oznacza Rozporządzenie Parlamentu
                Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w
                związku z
                przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy
                95/46/WE.
            </li>
            <li class="privacy__text">Szanujemy prawo do prywatności i dbamy o bezpieczeństwo danych. W tym celu używany
                jest m.in. bezpieczny protokół szyfrowania komunikacji (SSL).
            </li>
            <li class="privacy__text">Dane osobowe podawane w formularzach kontaktowych są traktowane jako poufne i nie
                są
                widoczne dla osób nieuprawnionych.
            </li>
        </ol>

        <h4 class="privacy__heading">§2. Administrator Danych</h4>
        <ol class="privacy__list" start="7">
            <li class="privacy__text">Usługodawca jest administratorem danych swoich klientów. Oznacza to, że jeśli
                posiadasz Konto na naszej stronie, to przetwarzamy Twoje dane jak: imię, nazwisko, adres e-mail, numer
                telefonu, stanowisko, miejsce pracy, adres IP.
            </li>
            <li class="privacy__text">Usługodawca jest także administratorem osób zapisanych na newsletter oraz osób
                korzystających z formularza kontaktowego i formularza zapytań.
            </li>
            <li class="privacy__text">Dane osobowe przetwarzane są:</li>
            <ul class="privacy__list privacy__list--empty">
                <li class="privacy__text">a) zgodnie z przepisami dotyczącymi ochrony danych osobowych,</li>
                <li class="privacy__text">b) zgodnie z wdrożoną Polityką Prywatności,</li>
                <li class="privacy__text">c) w zakresie i celu niezbędnym do nawiązania, ukształtowania treści Umowy,
                    zmiany
                    bądź jej rozwiązania oraz prawidłowej realizacji Usług świadczonych drogą elektroniczną,</li>
                <li class="privacy__text">d) w zakresie i celu niezbędnym do wypełnienia uzasadnionych interesów
                    (prawnie
                    usprawiedliwionych celów), a przetwarzanie nie narusza praw i wolności osoby, której dane dotyczą: w
                    zakresie i celu zgodnym ze zgodą wyrażoną przez Ciebie jeśli [przykładowo] zapisałeś się na
                    newsletter,
                    w zakresie i celu zgodnym z wyrażoną przez Ciebie zgodą jeżeli [przykładowo] użyłeś formularza
                    kontaktowego lub formularza zapytań.</li>
            </ul>
            <li class="privacy__text">Każda osoba, której dane dotyczą (jeżeli jesteśmy ich administratorem) ma prawo
                dostępu do danych, sprostowania, usunięcia lub ograniczenia przetwarzania, prawo sprzeciwu, prawo
                wniesienia
                skargi do organu nadzorczego.
            </li>
            <li class="privacy__text">Kontakt z osobą nadzorującą przetwarzanie danych osobowych w organizacji
                Usługodawcy
                jest możliwy drogą elektroniczną pod adresem e-mail: <a href="mailto:biuro@fprotect.pl"
                    class="privacy__link">biuro@fprotect.pl</a>
            </li>
            <li class="privacy__text">Zastrzegamy sobie prawo do przetwarzania Twoich danych po rozwiązaniu Umowy lub
                cofnięciu zgody tylko w zakresie na potrzeby dochodzenia ewentualnych roszczeń przed sądem lub jeżeli
                przepisy krajowe albo unijne bądź prawa międzynarodowego obligują nas do retencji danych.
            </li>
            <li class="privacy__text">Usługodawca ma prawo udostępniać dane osobowe Użytkownika oraz innych jego danych
                podmiotom upoważnionym na podstawie właściwych przepisów prawa (np. organom ścigania).
            </li>
            <li class="privacy__text">Usunięcie danych osobowych może nastąpić na skutek cofnięcia zgody bądź wniesienia
                prawnie dopuszczalnego sprzeciwu na przetwarzanie danych osobowych.
            </li>
            <li class="privacy__text">Usługodawca nie udostępniania danych osobowych innym podmiotom aniżeli
                upoważnionym na
                podstawie właściwych przepisów prawa.
            </li>
            <li class="privacy__text">Usługodawca zapewnia aktualne standardy zabezpieczeń celem zminimalizowania
                skutków
                ewentualnego naruszenia bezpieczeństwa danych.
            </li>
            <li class="privacy__text">Dane osobowe przetwarzają osoby wyłącznie upoważnione przez nas albo
                przetwarzający, z
                którymi ściśle współpracujemy.
            </li>
        </ol>

        <h4 class="privacy__heading">§3. Pliki cookies</h4>
        <ol class="privacy__list" start="18">
            <li class="privacy__text">Witryna https://fprotect.pl używa plików cookies. Są to niewielkie pliki
                tekstowe wysyłane przez serwer www i przechowywane przez oprogramowanie komputera przeglądarki. Kiedy
                przeglądarka ponownie połączy się ze stroną, witryna rozpoznaje rodzaj urządzenia, z którego łączy się
                użytkownik. Parametry pozwalają na odczytanie informacji w nich zawartych jedynie serwerowi, który je
                utworzył. Cookies ułatwiają więc korzystanie z wcześniej odwiedzonych witryn.<br>Gromadzone informacje
                dotyczą adresu IP, typu wykorzystywanej przeglądarki, języka, rodzaju systemu operacyjnego, dostawcy
                usług
                internetowych, informacji o czasie i dacie, lokalizacji oraz informacji przesyłanych do witryny za
                pośrednictwem formularza kontaktowego.

            </li>
            <li class="privacy__text">Zebrane dane służą do monitorowania i sprawdzenia, w jaki sposób użytkownicy
                korzystają z naszych witryn, aby usprawniać funkcjonowanie serwisu zapewniając bardziej efektywną i
                bezproblemową nawigację. Monitorowania informacji o użytkownikach dokonujemy korzystając z narzędzia
                Google
                Analitics, które rejestruje zachowanie użytkownika na stronie.<br>Cookies identyfikuje użytkownika, co
                pozwala na dopasowanie treści witryny, z której korzysta, do jego potrzeb. Zapamiętując jego
                preferencje,
                umożliwia odpowiednie dopasowanie skierowanych do niego reklam. Stosujemy pliki cookies, aby
                zagwarantować
                najwyższy standard wygody naszego serwisu, a zebrane dane są wykorzystywane jedynie wewnątrz firmy
                FPROTECT
                sp. z o.o. (dawniej ANTYFIRESYSTEM) w celu optymalizacji działań.
            </li>
            <li class="privacy__text">Na naszej witrynie wykorzystujemy następujące pliki cookies:</li>
            <ul class="privacy__list privacy__list--empty">
                <li class="privacy__text">a) „niezbędne” pliki cookies, umożliwiające korzystanie z usług dostępnych w
                    ramach serwisu, np. uwierzytelniające pliki cookies wykorzystywane do usług wymagających
                    uwierzytelniania w ramach serwisu;</li>
                <li class="privacy__text">b) pliki cookies służące do zapewnienia bezpieczeństwa, np. wykorzystywane do
                    wykrywania nadużyć w zakresie uwierzytelniania w ramach serwisu;
                </li>
                <li class="privacy__text">c) „wydajnościowe” pliki cookies, umożliwiające zbieranie informacji o
                    sposobie
                    korzystania ze stron internetowych serwisu;
                </li>
                <li class="privacy__text">d) „funkcjonalne” pliki cookies, umożliwiające „zapamiętanie” wybranych przez
                    użytkownika ustawień i personalizację interfejsu użytkownika, np. w zakresie wybranego języka lub
                    regionu, z którego pochodzi użytkownik, rozmiaru czcionki, wyglądu strony internetowej itp.;
                </li>
                <li class="privacy__text">e) „reklamowe” pliki cookies, umożliwiające dostarczanie użytkownikom treści
                    reklamowych bardziej dostosowanych do ich zainteresowań.
                </li>
            </ul>
            <li class="privacy__text">Użytkownik w każdej chwili ma możliwość wyłączenia lub przywrócenia opcji
                gromadzenia
                cookies poprzez zmianę ustawień w przeglądarce internetowej. Instrukcja zarządzania plikami cookies jest
                dostępna na stronie: <a target="_blank" href="https://www.allaboutcookies.org/manage-cookies"
                    class="privacy__link">https://www.allaboutcookies.org/manage-cookies</a>
            </li>
            <li class="privacy__text">Dodatkowe dane osobowe, jak adres e-mail, zbierane są jedynie w miejscach, w
                których
                użytkownik wypełniając formularz wyraźnie wyraził na to zgodę. Powyższe dane zachowujemy i
                wykorzystujemy
                tylko do potrzeb niezbędnych do wykonania danej funkcji.</li>
        </ol>
    </div>
</div>

@endsection
