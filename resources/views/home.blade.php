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
    <div class="container h-screen m-auto">
        <header style="height: 10vh" class="flex items-center">
            <img class="h-8" src="<?php echo asset('storage/images/logo.png'); ?>"
                alt="logo">
        </header>
        <main style="height: 90vh">

            <x-t-slider></x-t-slider>

            <ul class="relative container overflow-auto h-96">

                @foreach ($events as $event)
                    <x-t-event-card1>
                        {{$event->title}}
                    </x-t-event-card1>
                @endforeach

            </ul>
            
            <x-t-navbar></x-t-navbar>

        </main>
    </div>

</body>

</html>
