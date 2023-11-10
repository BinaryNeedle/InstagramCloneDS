{{-- // Setting Pages on your account to sett your name username bio and other --}}
@extends('layouts.main')
@section('title', 'Edit Profile')
@section('css')
@section('content')
    <div class="flex flex-col justify-center items-center h-screen">
        <div id="content" class="w-full max-w-md my-auto">
            <div class="dark:bg-[#1f2937] shadow-md rounded px-8 pt-6 pb-8">
                <img src="{{ URL::asset('assets/imgs/logo-exported.png') }}" class="h-32 mx-auto" alt="Instantgram Logo" />
                <h2 class="dark:text-white text-2xl font-bold mb-6 text-center">Edit Account</h2>
                <form method="POST" action="{{ route('profileSetting', ['username' => '@' . auth()->user()->username]) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-bold mb-2 dark:text-white">Username</label>
                        <input id="username" type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') border-red-500 @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2 dark:text-white">Name</label>
                        <input id="name" type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="bio" class="block text-gray-700 font-bold mb-2 dark:text-white">Bio</label>
                        <textarea id="bio" type="text" rows="10"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('bio') border-red-500 @enderror"
                            name="bio" value="{{ old('bio') }}" required autocomplete="bio" autofocus></textarea>
                        @error('bio')
                            <p class="text-red-500 text-xs italic mt-4 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="bio" class="block text-gray-700 font-bold mb-2 dark:text-white">Profile
                            Image</label>
                        <input class="dark:text-white" name="profileImage" type="file">
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
