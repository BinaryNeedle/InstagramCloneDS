<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.styles')
</head>

<body>
    @unless (Route::is(['login', 'register']))
        @include('partials.navbar')
    @endunless
    <main id="main"
        class="{{ Route::is(['login', 'register']) ? 'p-4 w-full dark:bg-[#111828] h-screen' : 'pt-14 sm:ml-64 dark:bg-[#111828] h-screen overflow-y-hidden' }}">
        <section
            class="{{ Route::is(['login', 'register']) ? 'border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-full' : 'h-full' }}">
            >>>>>>> bc9571ec7ef1da1d32a7f1f66bfbdf49a5b629f4
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
