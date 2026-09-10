<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('role');
            $table->text('deskripsi');
            $table->string('linkinstagram');
            $table->string('linkemail');
            $table->string('linklinkedin');
            $table->string('foto');
            $table->string('cv');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};