<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index() {
        return response()->json(Event::all(), 200);
    }

    public function singUpEvent($id) {
        $userID = Auth::user()->id;
        $newEventID = Event::find($id);
        $newEventID->users()->attach($userID);
        //SendEmail::dispatch(Auth::user()->email, "EVENT NOTIFICATION");
        return redirect()->route('home');
   }
}
