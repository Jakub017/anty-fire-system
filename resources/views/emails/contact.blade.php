<style>
    * {
        font-family: 'Open Sans', sans-serif;
    }

    a {
        color: #000;
    }

</style>

<h2>Nowa wiadomość z formularza kontaktowego ze strony fprotect.pl</h2>

<p>Imię i nazwisko: <b>{{ $data['name'] }}</b></p>
<p>Adres e-mail: <a href="mailto:{{ $data['email'] }}"><b>{{ $data['email'] }}</b></a></p>
<p>Numer telefonu: <a href="tel:{{ $data['phone'] }}"><b>{{ $data['phone'] }}</b></a></p>
<p>Wiadomość: <b>{{ $data['message'] }}</b></p>
