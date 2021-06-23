@foreach ($event_user as $event)
        <div class="bg-blue-dark flex items-center ml-4 h-24 w-36">
            <p class="font-bold text-xl text-aqua" style="margin: auto">SQL/<br>PHP</p>
        </div>
        <div class="w-full m-2 pl-2">
            <p class="text-right">03/06/2021</p>
            <h2 class="font-bold text-xl">{{$event->title}}</h2>
            <p class="bg-aqua-light" style="width: fit-content">29 places / 1 available</p>
            <p>{{$event->description}}</p>
        </div>
@endforeach