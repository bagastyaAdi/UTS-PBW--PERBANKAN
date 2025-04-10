<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clock_in_out_locations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lokasi');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('radius_presensi');
            $table->enum('zona_waktu',['wib','wita','wit']);
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clock_in_out_locations');
    }
};
