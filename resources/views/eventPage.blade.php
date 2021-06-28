<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container h-screen">
        <a href="{{ route('home') }}">
            <x-t-arrow-white />
        </a>
        <section class="w-screen h-2/5 flex justify-center flex-col items-center bg-blue-dark">
            <h3 class="text-white">{{ $event->title }}</h3>
            <h2 class="text-white">{{ $event->description }}</h2>
            <img class="h-44" src="{{ $event->image }}" />
        </section>
        <section class="w-screen h-3/5">
            <div class="flex space-x-8 justify-center pt-4">
                <div class="bg-yellow" class="w-36 flex justify-center">
                    <p>{{ $event->date }}</p>
                </div>
                <div class="bg-aqua">
                    <p class="bg-aqua-light" style="width: fit-content">{{ $event->capacity }} places
                        /{{ $event->remaining }} available</p>
                </div>
            </div>
            <div class="p-8">
                <p>{{ $event->full_description }}</p>
            </div>
            <div class="flex justify-center">
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
                            <button class="btn bg-yellow border-2 border-black w-32 h-8">{{ $whichButton }}</button>
                        </a>
                    @else
                        <a href="/unsubscribe/{{ $event->id }}">
                            <button class="btn bg-blue border-2 border-black w-32 h-8">{{ $whichButton }}</button>
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}">
                        <button class="btn bg-yellow border-2 border-black w-32 h-8">{{ $whichButton }}</button>
                    </a>
                @endif
            </div>
        </section>
    </div>
</body>

</html>
