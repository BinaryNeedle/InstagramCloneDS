<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.styles')
</head>

<body
    class="{{ Route::is(['login', 'register']) ? 'dark:bg-[#111828] w-full' : 'md:p-0 xl:ml-64 md:ml-44 dark:bg-[#111828]' }}">
    @unless (Route::is(['login', 'register']))
        @include('partials.navbar')
    @endunless
    <main id="main" class="xl:container w-full md:w-full mx-0 md:mx-auto wrapper">
        <section class="">
            @yield('content')
        </section>
    </main>

    @include('partials.footers')
    @include('partials.scripts')
</body>

</html>
