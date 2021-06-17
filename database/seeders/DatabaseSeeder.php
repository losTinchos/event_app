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
        User::factory()->create(['name' => 'Admin', 'email' =>'anya@gmail.com']);
       
       
        Event::factory(5)->create();
    
    }
}
