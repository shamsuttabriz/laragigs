<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Listing::factory(7)->create();

        // Listing::factory()->create([
        //     "title" => "Laravel senior developer",
        //     "tags" => "laravel,javascript",
        //     "company" => "Acme Corp",
        //     "email" => "hr@acme.com",   // ✅ ADD THIS
        //     "location" => "india",
        //     "website" => "https://www.tabriz.com",
        //     "description" => "lorem ipsum odlar sit amet consectetur adipisicing elit. Ipsam minima et illo repreehenderit quas possimus voouptas repudiance cum expediata, eveniet aliquid, quam illum quaerat consequatur! Expediata ab consectuete tentur delensitit?",
        // ]);


        // Listing::factory()->create([
        //     "title" => "Full Stack Developer",
        //     "tags" => "laravel,javascript",
        //     "company" => "Acme Corp",
        //     "email" => "email1@email.com",
        //     "location" => "bangladesh",
        //     "website" => "https://www.tabriz.com",
        //     "description" => "lorem ipsum odlar sit amet consectetur adipisicing elit. Ipsam minima et illo repreehenderit quas possimus voouptas repudiance cum expediata, eveniet aliquid, quam illum quaerat consequatur! Expediata ab consectuete tentur delensitit?"
        // ]);
    }
}
