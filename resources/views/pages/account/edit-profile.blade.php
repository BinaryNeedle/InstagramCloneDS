{{-- // Setting Pages on your account to sett your name username bio and other --}}
@extends('layouts.main')
@section('title', 'Edit Profile')
@section('css')
@section('content')
    <div class="flex flex-col justify-center items-center pt-20 ">
        <div id="content" class="w-full max-w-md my-auto">
            <div class="dark:bg-[#1f2937] shadow-md rounded-lg px-8 pt-6 pb-8">
                {{-- <img src="{{ URL::asset('assets/imgs/logo-exported.png') }}" class="h-32 mx-auto" alt="Instantgram Logo" /> --}}
                <h2 class="dark:text-white text-2xl font-bold mb-6 text-center">Edit Account</h2>
                <form method="POST" action="{{ route('profileUpdate', ['username' => '@' . auth()->user()->username]) }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="mb-4">
                        <div class="cover-images flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/profiles/' . $images) }}" alt=""
                                class="w-40 rounded-full">
                        </div>
                        <label for="images"
                            class="block flex justify-center my-5 cursor-pointer text-gray-700 font-bold mb-2 dark:text-white hover:text-blue-600">
                            Profile Image</label>
                        <input type="file" class="dark:text-white" id="images" name="images"
                            value="{{ $images }}" hidden>
                        @error('images')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-bold mb-2 dark:text-white">Username</label>
                        <input id="username" type="text"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('username') border-red-500 @enderror"
                            name="username" value="{{ $username ?? old('username') }}" required autocomplete="username"
                            autofocus>
                        @error('username')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2 dark:text-white">Name</label>
                        <input id="name" type="text"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('name') border-red-500 @enderror"
                            name="name" value="{{ $name ?? old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="bio" class="block text-gray-700 font-bold mb-2 dark:text-white">Bio</label>
                        <textarea id="bio" type="text" rows="10"
                            class="block p-2.5 w-full resize-none text-sm text-gray-900 bg-gray-50 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('bio') border-red-500 @enderror"
                            name="bio" value="" required autocomplete="bio" autofocus>{{ $bio ?? old('bio') }}</textarea>
                        @error('bio')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col items-center justify-between">
                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
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
