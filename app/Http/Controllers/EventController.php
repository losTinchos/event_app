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
        $user = Auth::user();
        $event = $user->events;
        if(auth()->user()->role==='admin'){
            return view('create', ['event' => $event, 'events' => $events]);
        }
        /*if(!$this->auth->user()){
            return view('home', ['events' => $events]);
        }*/
        return view('home', ['event_user' => $event, 'events' => $events]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Event $event)
    {
        return view('eventPage', ['event' => $event]);
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
        return redirect()->route('home');
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
