<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Event;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'Anya', 'email' =>'anya@gmail.com']);

        Event::factory(5)->create();

      /*  Foreach (Event::all() as $event){
            $users = User::inRandomOrder()->take(rand(1,10))->pluck('id');
            $event->events()->attach($users);
        }*/
    
    }


}
