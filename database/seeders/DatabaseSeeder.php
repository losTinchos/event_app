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
<<<<<<< HEAD

=======
       
>>>>>>> 4c28aa7f2dc6ac46d2cd0b46e66e5d34c3c8034a
        Event::factory(5)->create();
    
    }
}
