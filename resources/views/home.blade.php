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

<body>
    <div class="container mx-auto">
        <header class="flex">
            <figure class="logo"><img
                    src="<?php echo asset('storage/images/logo.png'); ?>" alt="logo">
            </figure>
        </header>
        <main>
            <h4>POPULAR EVENTS</h4>
            <div class="slider container">
                <time>03/06/2021</time>
                <h4 class="aqua">MASTER CLASS</h4>
                <h2 class="aqua">PHP for noobs</h2>
                <p class="white">This talk is an introduction to one of the most popular back-end languages</p>
                <div class="flex justify-center">
                    <button class="btn-yellow border-2 border-black w-32 h-8">Join Event</button>
                </div>
            </div>

                <ul>
                    <li class="event-card inline-flex border-2 border-indigo-900 mx-3 my-3" style="width: 86vw">
                        <div class="plate"><p class="mx-7 my-4 font-bold text-lg" style="color: #00B3D5">SQL/ <br> PHP</p></div>
                        <div class="event-description flex flex-col">
                            <date class="flex justify-end mr-2">03/06/2021</date>
                            <h2 class="font-bold text-2xl">Google API</h2>
                            <p style="background-color: #D6FEF6; width: 10.2rem">29 places / 1 available</p>
                            <p>These APIs allow the <br>users to get information...</p>
                            <a>Read More</a>
                            <button>Cancel</button>
                        </div>
                    </li>

                    <li class="event-card inline-flex border-2 border-indigo-900 mx-3 my-3" style="width: 86vw">
                        <div class="plate"><p class="mx-7 my-4 font-bold text-lg" style="color: #00B3D5">SQL/ <br> PHP</p></div>
                        <div class="event-description flex flex-col">
                            <date class="flex justify-end mr-2">03/06/2021</date>
                            <h2 class="font-bold text-2xl">Google API</h2>
                            <p style="background-color: #D6FEF6; width: 10.2rem">29 places / 1 available</p>
                            <p>These APIs allow the <br>users to get information...</p>
                            <a>Read More</a>
                            <button>Cancel</button>
                        </div>
                    </li>

                    <li class="event-card inline-flex border-2 border-indigo-900 mx-3 my-3" style="width: 86vw">
                        <div class="plate"><p class="mx-7 my-4 font-bold text-lg" style="color: #00B3D5">SQL/ <br> PHP</p></div>
                        <div class="event-description flex flex-col">
                            <date class="flex justify-end mr-2">03/06/2021</date>
                            <h2 class="font-bold text-2xl">Google API</h2>
                            <p style="background-color: #D6FEF6; width: 10.2rem">29 places / 1 available</p>
                            <p>These APIs allow the <br>users to get information...</p>
                            <a>Read More</a>
                            <button>Cancel</button>
                        </div>
                    </li>
                </ul>

                <nav></nav>
            </main>
        </div>

    <div
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
    </div>
</body>

</html>
