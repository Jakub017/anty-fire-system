<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/80916011c5.js" crossorigin="anonymous"></script>


    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/website/style.css')}}">
</head>

<body>
    @include('elements.header')
    @yield('content')
    @include('elements.footer')
</body>

</html>
