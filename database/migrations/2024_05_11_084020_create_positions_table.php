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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->string('posisiSlug');
            $table->string('employer_nama');
            $table->text('deskripsi')->nullable();
            $table->text('skill')->nullable();
            $table->boolean('sedang',false)->nullable();
            $table->string('mulai')->nullable();
            $table->string('selesai')->nullable();
            $table->string('tgl')->nullable();
            // $table->date('mulai')->nullable();
            // $table->date('selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
