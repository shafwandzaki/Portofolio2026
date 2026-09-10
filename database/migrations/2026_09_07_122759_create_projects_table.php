<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nameproject');
            $table->string('image');
            $table->text('deskripsi');
            $table->text('detail_deskripsi');
            $table->string('tech_stack');
            $table->string('demo_url')->nullable();
            $table->string('repo_url')->nullable();
            $table->string('type')->default('terkait');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};