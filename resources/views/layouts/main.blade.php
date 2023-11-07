<!DOCTYPE html>
<html lang="en" class="dark">

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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- Custom CSS Here --}}
    <link rel="stylesheet" href="{{ URL::asset('/src/css/layouts/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/src/css/partials/navbars.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
    <script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script> --}}
    @yield('css')

</head>

<body>
    @if (URL::current() === url('/login'))
    @elseif (URL::current() === url('/register'))
    @else
        @include('partials.navbar2')
    @endif
    {{-- manual overide the background color for darkmode --}}
    @if (URL::current() === url('/login'))
        <main class="p-4 w-full dark:bg-[#111828] h-screen">
        @elseif (URL::current() === url('/register'))
            <main class="p-4 w-full dark:bg-[#111828] h-screen">
            @else
                <main class="p-4 pt-20 sm:ml-64 dark:bg-[#111828] h-screen">
    @endif
    @if (URL::current() === url('/login'))
        <section class="border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-full">
        @elseif (URL::current() === url('/register'))
            <section class="border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-full">
            @else
                <section class="border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-full">
    @endif
    <section class="container mx-auto wrapper h-full">
        @yield('content')
    </section>
    </section>
    </main>

    @include('partials.footers')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    {{-- <script>
        FlexMasonry.init('.grid');
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    {{-- hide navbar when scroll --}}
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-60px";
            }
            prevScrollpos = currentScrollPos;
        };
    </script>
    @yield('script')
</body>

</html>
