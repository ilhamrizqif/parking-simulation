<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking', function (Blueprint $table) {
            $table->id();
            $table->string('No_Polisi');
            $table->date('Tanggal_Masuk');
            $table->time('Jam_masuk');
            $table->date('Tanggal_Keluar');
            $table->time('Jam_Keluar');
            $table->string('Jenis_Kendaraan');
            $table->string('Biaya_Parkir');
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
        Schema::dropIfExists('parking');
    }
};
