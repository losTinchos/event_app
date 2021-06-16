<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.home', ['events'=>$events]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Event $event)
    {
<<<<<<< HEAD
        $articulo = Articulo::with('events')->find($id); 
        $events = $articulo->events;
        return view('events.home.');
=======
        return view('eventPage', ['event' => $event]);
>>>>>>> 64a77626dd4ffea296e190b357114d4cfe1d72f9
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $user = Auth::user();
        $event = $user->events;
        return view('myEvents', ['event_user' => $event]);
   }
   public function singUpEvent($id) {
        $userID = Auth::user()->id;
        $newEventID = Event::find($id);
        $newEventID->users()->attach($userID);
        return redirect()->route('home');
   }
   public function leaveEvent($id) {
    $userID = Auth::user()->id;
    $newEventID = Event::find($id);
    $newEventID->users()->detach($userID);
    return redirect()->route('myEvents');
   }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

   
}
