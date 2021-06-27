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
    <div class="h-full w-full">
        <header style="height: 10vh" class="flex justify-between">
            <img class="h-8" src="<?php echo asset('storage/images/logo.png'); ?>" alt="logo">
            <p class="">@if (Auth::check()) {{auth()->user()->name}}</p> @endif
        </header>
        <main style="height: 90vh">
            <div style="height: inherit">
            <ul class="flex flex-wrap justify-center align-center relative w-full overflow-auto h-full">
            <!--bg-blue-dark bg-blue-->
            @if (Auth::check())
                @foreach ($event_user as $event)
                <li style="width: 24rem;" class="flex justify-between event-card inline-flex border-2 border-blue-dark mx-3 my-3 items-center">
                    <div class="bg-blue-dark flex items-center ml-4 h-24 w-36">
                        <p class="font-bold text-xl text-aqua" style="margin: auto">SQL/<br>PHP</p>
                    </div>
                    <div class="w-full m-2 pl-2">
                        <p class="text-right">03/06/2021</p>
                        <h2 class="font-bold text-xl">{{$event->title}}</h2>
                        <p class="bg-aqua-light" style="width: fit-content">29 places / 1 available</p>
                        <p>{{$event->description}}</p>
                        <div class="inline-flex space-x-10">
                                <button class="text-blue font-bold">Read More</button>
                            <a href="/unsubscribe/{{ $event->id }}">
                            <button class="text-red font-bold" >Leave Event</button>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            @endif
            </ul>
            </div>
            <nav class="h-20 bg-aqua-light inline-flex min-w-full justify-around absolute bottom-0">
                <button>
                    <a href="{{ route("home")}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-aqua" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    </a>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-aqua" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button>
                    <a href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-aqua" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    </a>
                </button>
            </nav>
        </main>
    </div>
</body>

</html>