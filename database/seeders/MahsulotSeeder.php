<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahsulot;
use App\Models\Obyekt;
use App\Models\Oqibat;
use App\Models\Risk;

class MahsulotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahsulot = new Mahsulot();
        $mahsulot->nom="Ko'chmas mulkni yong'in, zilzila va buzib kirib o'g'irlik qilish natijasida shikastlanish va nobud bo'lishdan sug'urta qilish";

        $obyekt=Obyekt::find(1);
        $mahsulot->obyekt_id=$obyekt->id;
        $mahsulot->yaratilgan_sana=now();
        $mahsulot->save();

        $oqibat=Oqibat::find(2);
        $risk=Risk::find(3);
        $mahsulot->oqibats()->attach($oqibat->id);
        $mahsulot->risks()->attach($risk->id);
    }
}
