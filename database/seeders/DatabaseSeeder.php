<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Abdulloboy",
            "email" => "abdulloboy5@gmail.com",
            "password" => Hash::make("password")
        ]);
        $this->call([
            ObyektSeeder::class,
            OqibatSeeder::class,
            RiskSeeder::class,
            MahsulotSeeder::class,
        ]);
    }
}
