<?php

namespace App\Http\Controllers;

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

    public function up(Event $event, Request $request)
    {
     
       $event = request()->except('_token');

        Event::insert($event);

    
        return redirect('newEvent')->with('mensaje','Evento agregado con éxito');
    }
    function usersSigned($id) {
        $event = Event::find($id);
        return $event->users;
   }

    public function index()
    {
        
        $events = Event::all()->sortByDesc('date')
        ->groupBy(function($event) {
            $event['attending'] = count($this->usersSigned($event->id));
            $event['remaining'] = $event->capacity - $event->attending;
            return $event->date < now() ? 'past' : 'upcoming';
            });
            
        if (!Auth::check()) {
            return view('home', ['events' => $events]);
        }

        $user = Auth::user();
        $event = $user->events;

        if(Auth::user()->role === 'admin') {
            return view('create', ['event' => $event, 'events' => $events]);
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Event $event, Request $request)
    {
        // if (!Auth::check()) {
        //     return view('eventPage', ['event' => $event]);
        // }
        // $user = Auth::user();
        // $events = $user->events;
        // return view('eventPage', ['event' => $event, 'event_user' => $events]);
        // if(Auth::user()->role === 'admin') {
        //     return view('create', ['event' => $event, 'events' => $events]);
        // }
        // $event = Event::create(["title"=>$request->title,
        //                     "description"=>$request->description,
        //                     "ful_description"=>$request->full_description,
        //                     "image"=>$request->image,
        //                     "date"=>$request->date]);

        
                            
        // $event->save();
        // return redirect()->route('home');

        $request->validated();

        $user = Auth::user();

        $event = new Event();
        $event->user()->associate($user);
        // $url_image = $this->upload($request->file('image'));
        // $event->image = $url_image;
        $event->title = $request->input('title');
        $event->description = $request->input('description');

        $res = $event->save();

        if ($res) {
            return response()->json(['message' => 'Post create succesfully'], 201);
        }
        return response()->json(['message' => 'Error to create post'], 500);
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
