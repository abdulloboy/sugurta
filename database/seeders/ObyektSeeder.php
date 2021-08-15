<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obyekt;

class ObyektSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obyekt::create([
            'nom' => "Ko'chmas mulk",
            'klass' => "8,9"]);
        Obyekt::create([
            'nom' => "Avtotransport vositasi",
            'klass' => "3"]);
        Obyekt::create([
            'nom' => "Havo kemalari",
            'klass' => "5"]);
    }
}
