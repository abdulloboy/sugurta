<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahsulotOqibatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahsulot_oqibat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahsulot_id')->constrained()->cascadeOnDelete();
            $table->foreignId('oqibat_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahsulot_oqibat');
    }
}
