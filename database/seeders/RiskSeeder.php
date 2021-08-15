<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Risk;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Risk::create([
            'nom' => "Yong'in",
            'klass' => "1,3-13"]);
        Risk::create([
            'nom' => "Portlash",
            'klass' => "1,3-13"]);
        Risk::create([
            'nom' => "Bo'ron",
            'klass' => "1,3-13"]);
    }
}
