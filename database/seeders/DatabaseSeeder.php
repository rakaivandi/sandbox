<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Property::create([
            'name' => 'kubu',
            'type' => 'apartment',
            'description' => 'kubu description',
            'category' => 'sell',
            'image' => 'image1.jpg',
            'price' => '100000',
            'location' => 'Denpasar',
        ]);

        Property::create([
            'name' => 'kubu',
            'type' => 'homestay',
            'description' => 'kubu description',
            'category' => 'rent',
            'image' => 'image1.jpg',
            'price' => '100000',
            'location' => 'Kuta',
        ]);

        Property::create([
            'name' => 'kubu',
            'type' => 'house',
            'description' => 'kubu description',
            'category' => 'rent',
            'image' => 'image1.jpg',
            'price' => '100000',
            'location' => 'Denpasar',
        ]);

        User::create([
            'name' => "raka", 'email'=>'raka@gmail.com', 'password' => Hash::make('raka'),
        ]);

        Message::create([
            'name' => "raka", 'email'=>'raka@gmail.com', 'phone'=>'0819153000', 'message' => 'raka message'
        ]);

        Message::create([
            'name' => "raka", 'email'=>'raka@gmail.com', 'phone'=>'0819153000', 'message' => 'raka message'
        ]);
    }
}
