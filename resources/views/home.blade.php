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
    
        <!-- Javascript -->
    <script>
        setInterval(() => {
            let button = document.querySelector(".carousel-control")
            button.onclick = slidermove

            function slidermove() {
                alert('I am foo!');
                return false;
            }
        }, 5000);
    </script>
</head>
<body>
    <div class="h-full w-full">
        <header style="height: 10vh" class="flex justify-between">
            <img class="h-8" src="<?php echo asset('storage/images/logo.png'); ?>"
                alt="logo">
                @if (Auth::check())
                    <p class="">{{Auth::user()->name}}</p>
                @endif
        </header>
        <main>             
        <div class="carousel">
            <div class="carousel-inner">
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item">
                    @for ($i = 1; $i < 2; $i++)
                    <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-blue-dark" style="height: 25vh">
                            <img class="h-28 p-3 pt-5"
                                src="<?php echo asset('storage/images/gear.png'); ?>" alt="">
                            <div class="flex-1">
                                <p class="text-aqua text-right">{{ $events[$i]->created_at}}</p>
                                <h4 class="text-aqua">{{ $events[$i]->title}}</h4>
                                <h2 class="font-bold text-xl text-aqua">{{ $events[$i]->description}}</h2>
                                <p class="text-white">{{ $events[$i]->full_description}}</p>
                                <x-t-btn-yellow></x-t-btn-yellow>
                        </div>                    
                    </div>
                    @endfor
                </div>
                @for ($i = 2; $i < count($events); $i++)
                <input class="carousel-open" type="radio" id="carousel-{{$i}}" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item">
                    <div class="snap-start w-full h-full flex items-center justify-center text-white text-4xl font-bold flex-shrink-0 bg-blue-dark" style="height: 25vh">
                            <img class="h-28 p-3 pt-5"
                                src="<?php echo asset('storage/images/gear.png'); ?>" alt="">
                            <div class="flex-1">
                                <p class="text-aqua text-right">{{ $events[$i]->created_at}}</p>
                                <h4 class="text-aqua">{{ $events[$i]->title}}</h4>
                                <h2 class="font-bold text-xl text-aqua">{{ $events[$i]->description}}</h2>
                                <p class="text-white">{{ $events[$i]->full_description}}</p>
                                <x-t-btn-yellow></x-t-btn-yellow>
                        </div>                    
                    </div>
                </div>
                @endfor
                @for ($i = 1; $i < $end = count($events) ; $i++)
                @php
                $prev = $i === 1 ? $end - 1 : $i - 1;
                $next = $i === $end - 1 ? 1 : $i + 1;
                @endphp
                <label for="carousel-{{$prev}}" class="carousel-control prev control-{{$i}}">‹</label>
                <label for="carousel-{{$next}}" class="carousel-control next control-{{$i}}">›</label>
                @endfor            
                <ol class="carousel-indicators">
                    @for ($i = 1; $i < count($events); $i++)
                    <li>
                        <label for="carousel-{{$i}}" class="carousel-bullet">•</label>
                    </li>
                    @endfor 
                </ol>
            </div>
        </div>
        </div>
            <div style="height: 55vh">
                <ul class="flex flex-wrap justify-center align-center relative w-full overflow-auto h-full">
                    <!--bg-blue-dark bg-blue-->
                    @foreach ($events as $event)
                        <li style="width: 24rem;"
                            class="flex justify-between event-card inline-flex border-2 border-blue-dark mx-3 my-3 items-center">
                            <div class="bg-blue-dark flex items-center ml-4 h-24 w-36">
                                <p class="font-bold text-xl text-aqua" style="margin: auto">SQL/<br>PHP</p>
                            </div>

                            <div class="w-full m-2 pl-2">
                                <p class="text-right">03/06/2021</p>
                                <h2 class="font-bold text-xl">{{ $event->title }}</h2>
                                <p class="bg-aqua-light" style="width: fit-content">29 places / 1 available</p>
                                <p>{{ $event->description }}</p>
                                <div class="inline-flex space-x-10">
                                    <a href="/event/{{ $event->id }}">
                                        <button class="text-blue font-bold">Read More</button>
                                    </a>
                                    @php
                                        $whichButton = 'Join Event';
                                    @endphp
                                    @if (Auth::check())
                                        @foreach ($event_user as $myEvent)
                                            @if ($myEvent->id == $event->id)
                                            @php
                                                $whichButton = 'Leave Event';
                                            @endphp
                                            @endif
                                        @endforeach
                                        @if ($whichButton == 'Join Event')
                                        <a href="/subscribe/{{ $event->id }}">
                                            <button class="text-blue font-bold">{{$whichButton}}</button>
                                        </a>
                                        @else
                                        <a href="/unsubscribe/{{ $event->id }}">
                                            <button class="text-red font-bold">{{$whichButton}}</button>
                                        </a>
                                        @endif
                                    @else 
                                    <a href="/login">
                                        <button class="text-blue font-bold">{{$whichButton}}</button>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            </ul>
            <nav class="h-20 bg-aqua-light inline-flex min-w-full justify-around absolute bottom-0">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-dark" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </button>
                <button>
                    <a href="{{ route('myEvents') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-aqua" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </a>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-aqua" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button>
                    <a href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-aqua" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    </a>
                </button>
            </nav>
        </main>
    </div>

</body>

</html>
