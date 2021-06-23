<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeButton() {
        
    }

    public function index()
    {
        $events = Event::all();
        if (!Auth::check()) {
            return view('home', ['events' => $events]);
        }

        $user = Auth::user();
        $event = $user->events;
        if($user->role === 'admin') {
            return view('admin.home2', ['event_user' => $event, 'events' => $events]);
        }
        return view('home', ['event_user' => $event, 'events' => $events]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if($user->role === 'admin') {
            return view('admin.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEvent = request()->except('_token');
        if (!Auth::check()) {
            return view('eventPage', ['event' => $newEvent]);
        }
        $user = Auth::user();
        $events = $user->events;
        Event::insert($newEvent);
        return redirect()->route('home');   
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show() {
        if (!Auth::check()) {
            return view('myEvents');
        }
        $user = Auth::user();
        $event = $user->events;
        return view('myEvents', ['event_user' => $event]);
   }
   
   public function singUpEvent($id) {
        $userID = Auth::user()->id;
        $newEventID = Event::find($id);
        $newEventID->users()->attach($userID);
        // SendEmail::dispatch(Auth::user()->email, "EVENT NOTIFICATION");
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
    public function edit($id)
    {
        $event = Event::find($id);

        return view ('admin.edit',['event'=>$event]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->update($request->all());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $events = Event::all();
        $user = Auth::user();
        $event = $user->events;

        Event::find($id)->delete();


        return redirect()->route('home');
    }
}
