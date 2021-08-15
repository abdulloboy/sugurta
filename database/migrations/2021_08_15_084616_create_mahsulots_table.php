<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahsulotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahsulots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('obyekt_id')->consrained()->cascadeOnDelete();
            $table->string('Nom');
            $table->timestamp('yaratilgan_sana');
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
        Schema::dropIfExists('mahsulots');
    }
}
