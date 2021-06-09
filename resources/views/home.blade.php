<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>commeet</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-screen">
    <div class="container mx-auto content">
        <header class="flex">
            <figure class="logo"><img
                    src="<?php echo asset('storage/images/logo.png'); ?>" alt="logo">
            </figure>
        </header>
        <main>

            <h4>POPULAR EVENTS</h4>
            <div class="inline-flex container p-4 bg-blue-dark">
                <img class="h-20 p-3 pt-5"
                    src="<?php echo asset('storage/images/gear.png'); ?>" alt="">
                <div class="flex-1">
                    <p class="text-aqua text-right">03/06/2021</p>
                    <h4 class="text-aqua">MASTER CLASS</h4>
                    <h2 class="font-bold text-xl text-aqua">PHP for noobs</h2>
                    <p class="text-white">This talk is an introduction to one of the most popular back-end languages</p>
                    <x-t-btn-yellow></x-t-btn-yellow>
                </div>
            </div>

            <ul class="relative container overflow-auto h-96">
                <x-t-event-card1></x-t-event-card1>
                <x-t-event-card2></x-t-event-card2>
                <x-t-event-card1></x-t-event-card1>
                <x-t-event-card1></x-t-event-card1>
            </ul>

            <x-t-navbar-user></x-t-navbar-user>

        </main>
    </div>

    {{-- <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}

</body>

</html>