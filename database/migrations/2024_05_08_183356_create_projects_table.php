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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('techStack');
            $table->text('deskripsi');
            $table->unsignedTinyInteger('jmlFoto')->default(0);
            $table->string('fileEkstensi',10)->default('jpg');
            $table->string('linkRepo')->nullable();
            $table->string('linkDemo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
