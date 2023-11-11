<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Instantgram' }}</title>
    @include('partials.styles')
</head>

<body class="{{ request()->is('login', 'register') ? 'dark:bg-[#111828] w-full' : 'md:p-0 xl:ml-64 md:ml-44 dark:bg-[#111828]' }}">
    @unless (request()->is('login', 'register'))
    @include('partials.navbar')
    @endunless

    <main id="main" class="xl:container w-full md:w-full mx-0 md:mx-auto wrapper">
        <section class="">
            {{ $slot }}
        </section>
    </main>

    @include('partials.scripts')
</body>

</html>
