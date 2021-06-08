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
            <div class="slider inline-flex container p-4 bg-blue-dark">
                <img class="h-20 p-3 pt-5" src="<?php echo asset('storage/images/gear.png'); ?>" alt="">
                <div class="text-container">
                    <p class="text-aqua text-right">03/06/2021</p>
                    <h4 class="text-aqua">MASTER CLASS</h4>
                    <h2 class="font-bold text-xl text-aqua">PHP for noobs</h2>
                    <p class="text-white">This talk is an introduction to one of the most popular back-end languages</p>
                    <x-t-btn-yellow></x-t-btn-yellow>
                </div> 
            </div>

                <ul>
                    <li class="event-card inline-flex border-2 border-blue-dark mx-3 my-3 items-center">
                        <div class="bg-blue-dark flex items-center ml-4 h-24 w-36">
                            <p class="font-bold text-xl text-aqua" style="margin: auto">SQL/<br>PHP</p>
                        </div>
                        <div class="m-2 pl-2">
                            <p class="text-right">03/06/2021</p>
                            <h2 class="font-bold text-xl">Google API</h2>
                            <p class="bg-aqua-light" style="width: fit-content">29 places / 1 available</p>
                            <p>These APIs allow the users to get information...</p>
                            <div class="inline-flex space-x-10">
                                <button class="text-blue font-bold">Read More</button>
                                <button class="text-red font-bold">Cancel</button>
                            </div>
                        </div>
                    </li>

                    <li class="event-card inline-flex border-2 border-indigo-900 mx-3 my-3">
                        <div class="plate bg-blue">
                            <p class="mx-7 my-4 font-bold text-xl text-blue-dark">SQL/ <br> PHP</p>
                        </div>
                        <div class="event-description flex flex-col">
                            <p class="flex justify-end mr-2">03/06/2021</p>
                            <h2 class="font-bold text-xl">Google API</h2>
                            <p class="bg-aqua-light">29 places / 1 available</p>
                            <p>These APIs allow the <br>users to get information...</p>
                            <div class="inline-flex">
                                <button class="p-2 text-blue font-bold">Read More</button>
                                <button class="p-2 text-red font-bold">Cancel</button>
                            </div>
                        </div>
                    </li>

                    <li class="event-card inline-flex border-2 border-indigo-900 mx-3 my-3">
                        <div class="plate bg-blue-dark">
                            <p class="mx-7 my-4 font-bold text-xl text-aqua">SQL/ <br> PHP</p>
                        </div>
                        <div class="event-description flex flex-col">
                            <p class="flex justify-end mr-2">03/06/2021</p>
                            <h2 class="font-bold text-xl">Google API</h2>
                            <p class="bg-aqua-light">29 places / 1 available</p>
                            <p>These APIs allow the <br>users to get information...</p>
                            <div class="inline-flex">
                                <button class="p-2 text-blue font-bold">Read More</button>
                                <button class="p-2 text-red font-bold">Cancel</button>
                            </div>
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
// comment