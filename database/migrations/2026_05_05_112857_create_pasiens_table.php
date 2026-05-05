<?php

//Migration table pasiens-Sistem Klinik
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
   public function up(): void
{
    Schema::create('pasiens', function (Blueprint $table) {
        $table->id();
        $table->string('no_rekam_medis');
        $table->string('nama_pasien');
        $table->string('jenis_kelamin');
        $table->integer('umur');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
