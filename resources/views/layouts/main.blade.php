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
    class="{{ Route::is(['login', 'register']) ? 'p-4 dark:bg-[#111828] w-full h-screen' : 'pt-14 md:p-0 xl:ml-64 md:ml-44 dark:bg-[#111828] h-screen' }}">
    @unless (Route::is(['login', 'register']))
        @include('partials.navbar')
    @endunless
    <main id="main" class="">
        <section
            class="{{ Route::is(['login', 'register']) ? 'border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-full' : 'h-full' }}">
            <section class="container mx-auto wrapper h-full">
                @yield('content')
            </section>
        </section>
    </main>

    @include('partials.footers')
    @include('partials.scripts')
    @yield('script')
</body>

</html>
