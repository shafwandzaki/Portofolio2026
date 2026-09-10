<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->string('mitra');
            $table->string('periode');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->string('type')->default('pengalamanterkait'); // pengalaman, lain, organisasi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};