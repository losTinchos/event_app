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

    function usersSigned($id) {
        $event = Event::find($id);
        //return $event->users; es igual a la línea 20 pero en formato json
        return response()->json($event->users, 200);
   }
}
