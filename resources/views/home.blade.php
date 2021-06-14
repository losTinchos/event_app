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
        <header style="height: 10vh" class="flex items-center">
            <img class="h-8" src="<?php echo asset('storage/images/logo.png'); ?>"
                alt="logo">
        </header>
        <main style="height: 90vh">
            <div class="inline-flex container p-4 bg-blue-dark" style="height: 25vh">
                <img class="h-28 p-3 pt-5" src="<?php echo asset('storage/images/gear.png'); ?>" alt="">
                <div class="flex-1">
                    <p class="text-aqua text-right">03/06/2021</p>
                    <h4 class="text-aqua">MASTER CLASS</h4>
                    <h2 class="font-bold text-xl text-aqua">PHP for noobs</h2>
                    <p class="text-white">This talk is an introduction to one of the most popular back-end languages</p>
                    <x-t-btn-yellow></x-t-btn-yellow>
                </div>
            </div>
            <div style="height: 55vh">
            <ul class="flex flex-wrap justify-center align-center relative w-full overflow-auto h-full">
            <!--bg-blue-dark bg-blue-->
                @foreach ($events as $event)
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
                            <a href="/event/{{ $event->id }}">
                                <button class="text-blue font-bold">Read More</button>
                            </a>
                            <button class="text-red font-bold">Cancel</button>
                        </div>
                    </div>
                </li>
            @endforeach
         
            </ul>
            </div>
                {{-- <x-t-event-card1></x-t-event-card1>
                <x-t-event-card2></x-t-event-card2>
                <x-t-event-card1></x-t-event-card1>
                <x-t-event-card1></x-t-event-card1> --}}

            </ul>
            
            <x-t-navbar></x-t-navbar>

        </main>
    </div>

</body>

</html>
