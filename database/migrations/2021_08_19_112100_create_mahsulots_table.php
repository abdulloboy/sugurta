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
            $table->bigInteger('id', true, true);
            $table->bigInteger('obyekt_id', false, true);
            $table->string('Nom', 255);
            $table->datetime('yaratilgan_sana');
            $table->datetime('deleted_at')->nullable();
            $table->bigInteger('risk', false, true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('obyekt_id')->references('id')->on('obyekts');
            $table->foreign('risk')->references('id')->on('risks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahsulots');
    }
}
