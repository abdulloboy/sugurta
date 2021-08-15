<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oqibat;

class OqibatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oqibat::create([
            'nom' => "Shikastlanish"]);
        Oqibat::create([
            'nom' => "Zararlanish"]);
        Oqibat::create([
            'nom' => "Yo'qolish"]);
    }
}
