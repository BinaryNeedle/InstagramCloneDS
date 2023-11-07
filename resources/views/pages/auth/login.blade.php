@extends('layouts.main')
@section('title', 'Login to Instantgram')
@section('css')
@section('content')
    <div class="flex justify-center items-center h-full overflow-auto">
        <div id="content" class="w-full max-w-md">
            <div class="dark:bg-[#1f2937] shadow-md rounded px-8 pt-6 pb-8">
                <img src="{{ URL::asset('assets/imgs/logo-exported.png') }}" class="h-32 mx-auto" alt="Instantgram Logo" />
                <h1 class="text-2xl font-bold mb-6 dark:text-white text-center">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2 dark:text-white" for="username_or_email">
                            Username or Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username_or_email" type="text" name="username_or_email"
                            value="{{ old('username_or_email') }}" required autofocus>
                        @error('username_or_email')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-7 flex flex-col">
                        <label class="block text-gray-700 font-bold mb-2 dark:text-white" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" name="password" required>
                        <span id="shpw" class="-mt-8 mr-3 self-end">
                            <svg id="show" class="w-6 h-6 text-gray-800 dark:text-dark hover:cursor-pointer hidden"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                                </g>
                            </svg>
                            <svg id="hide" class="w-6 h-6 text-gray-800 dark:text-dark hover:cursor-pointer"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1.933 10.909A4.357 4.357 0 0 1 1 9c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 19 9c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M2 17 18 1m-5 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </span>

                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-center justify-between">
                        <button
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Login
                        </button>

                        @if (Route::has('register'))
                            <p class="dark:text-white my-5">Didn't have account yet?</p>
                            <a class="w-full bg-blue-500 text-center hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        @endif

                        @if (Route::has('password.request'))
                            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                                href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    @endsection
    @section('script')
        {{-- show hide password --}}
        <script src="{{ URL::asset('src/js/sh_pw.js') }}"></script>

        {{-- check screen width --}}
        <script src="{{ URL::asset('src/js/screen.js') }}"></script>
    @endsection
