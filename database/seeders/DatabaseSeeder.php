<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();
         Listings::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listings ::create([
        //     'title' => 'Laravel Senior developer',
        //     'tags' => 'laravel,javascript',
        //     'company' => 'Test Company',
        //     'location' => 'Islamabad',
        //     'email' => 'test@example.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ut velit eos.',

        // ]);
        // Listings ::create([
        //     'title' => 'Software Engineer',
        //     'tags' => 'python,django',
        //     'company' => 'MOTIVE Company',
        //     'location' => 'Pindi',
        //     'email' => 'example@example.com',
        //     'description' => 'Lorem ipsum dolor sit amet consecteturnicidn cdojopcjsp cspojojscjc adipisicing elit. Iusto ut velit eos.',

        // ]);
    }

}
