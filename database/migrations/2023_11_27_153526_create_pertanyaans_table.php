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
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan_1');
            $table->string('pertanyaan_2');
            $table->string('pertanyaan_3');
            $table->string('pertanyaan_4');
            $table->string('pertanyaan_5');
            $table->string('pertanyaan_6');
            $table->string('pertanyaan_7');
            $table->foreignId('responden_id')->constrained('respondens')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaans');
    }
};
