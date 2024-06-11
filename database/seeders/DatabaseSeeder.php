<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'title' => 'Avenged Sevenfold',
            'tags' => 'Music, Rock, OPM',
            'organizer' => 'Bukidnon Music Entertainment',
            'location' => 'Stadion Gelora Bungkarno, Indonesian',
            'email' => 'avengedsevenfold@email.com',
            'contact_number' => '09924928176',
            'description' => 'Join us for a euphoric celebration of music and culture at the Kaamulan Music Festival! 
            Held in the heart of downtown, this electrifying event brings together world-class musicians, passionate fans, 
            and vibrant performers for an unforgettable weekend of rhythm and soul.'
        ]); 
    }
}
