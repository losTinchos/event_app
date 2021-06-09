@extends('events.layout.blade.php')

@section('content')
<div class="container mx-auto">
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
            @foreach ($events as $event)
            {{-- <x-t-event-card1></x-t-event-card1> --}}
            <li class="event-card inline-flex border-2 border-blue-dark mx-3 my-3 items-center">
                <div class="bg-blue-dark flex items-center ml-4 h-24 w-36">
                    <p class="font-bold text-xl text-aqua" style="margin: auto">SQL/<br>PHP</p>
                </div>
                <div class="m-2 pl-2">
                    <p class="text-right">03/06/2021</p>
                    <h2 class="font-bold text-xl">{{ $event->title }}I</h2>
                    <p class="bg-aqua-light" style="width: fit-content">29 places / 1 available</p>
                    <p>{{ $event->description }} </p>
                    <div class="inline-flex space-x-10">
                        <button class="text-blue font-bold">Read More</button>
                        <button class="text-red font-bold">Cancel</button>
                    </div>
                </div>
            </li>
            @endforeach
            
        </ul>

        <x-t-navbar-user></x-t-navbar-user>

    </main>
</div>
@endsection