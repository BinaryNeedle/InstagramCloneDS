<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/67db78fea9.js" crossorigin="anonymous"></script>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Custom CSS Here --}}
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/layouts/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/partials/navbars.css') }}">
    @yield('css')
    <style>
        @font-face {
            font-family: asu;
            src: url('assets\fonts\instagram_title_font_regular.otf') format("opentype");
        }

        @font-face {
            font-family: asu;
            font-weight: bold;
            src: url('assets\fonts\instagram_title_font_bold.otf') format("opentype");
        }
    </style>
</head>

<body>
    @include('partials.navbars')

    <div class="container wrapper">
        @yield('content')
    </div>

    @include('partials.footers')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>
