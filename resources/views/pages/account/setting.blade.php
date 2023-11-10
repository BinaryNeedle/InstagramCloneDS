{{-- // Setting Pages on your account to sett your name username bio and other --}}
@extends('layouts.main')
@section('title', 'Setting Account')
@section('css')
@section('content')
    <div class="flex flex-col justify-center items-center h-screen">
        <div id="content" class="w-full max-w-md my-auto">
            <div class="dark:bg-[#1f2937] shadow-md rounded px-8 pt-6 pb-8">
                <img src="{{ URL::asset('assets/imgs/logo-exported.png') }}" class="h-32 mx-auto" alt="Instantgram Logo" />
                <h2 class="dark:text-white text-2xl font-bold mb-6 text-center">Update Setting Account</h2>
                <form method="POST" action="{{ route('profileSetting', ['username' => '@' . auth()->user()->username]) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2 dark:text-white">Email</label>
                        <input id="email" type="email" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('email') border-red-500 @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-7 flex flex-col">
                        <label for="password" class="block text-gray-700 font-bold mb-2 dark:text-white">Password</label>
                        <input id="password" type="password" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('password') border-red-500 @enderror" name="password" required
                            autocomplete="new-password">
                        <span id="shpw" class="-mt-8 mr-3 self-end">
                            <svg id="show" class="w-6 h-6 text-gray-800 dark:text-white hover:cursor-pointer hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                                </g>
                            </svg>
                            <svg id="hide" class="w-6 h-6 text-gray-800 dark:text-white hover:cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.933 10.909A4.357 4.357 0 0 1 1 9c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 19 9c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M2 17 18 1m-5 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </span>
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-7 flex flex-col">
                        <label for="password-confirm" class="block text-gray-700 font-bold mb-2 dark:text-white">Confirm
                            Password</label>
                        <input id="password-confirm" type="password" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" name="password_confirmation" required autocomplete="new-password">
                        <span id="shpw_confirmation" class="-mt-8 mr-3 self-end">
                            <svg id="show_confirmation" class="w-6 h-6 text-gray-800 dark:text-white hover:cursor-pointer hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                                </g>
                            </svg>
                            <svg id="hide_confirmation" class="w-6 h-6 text-gray-800 dark:text-white hover:cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.933 10.909A4.357 4.357 0 0 1 1 9c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 19 9c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M2 17 18 1m-5 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex flex-col items-center justify-between">
                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- show hide password --}}
    <script src="{{ URL::asset('src/js/sh_pw.js') }}"></script>

    {{-- check screen width --}}
    <script src="{{ URL::asset('src/js/screen.js') }}"></script>
@endsection
