<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    $user = User::find(1);

    foreach ($user->events as event)
    {

    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'events_users');
    }


    
}
