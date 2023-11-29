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
        Schema::create('respondens', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('jenis_kelamin');
            $table->integer('status');
            $table->integer('profesi')->nullable();
            $table->integer('pendidikan')->nullable();
            $table->string('provinsi'); // Ubah menjadi string atau char
            $table->string('kota'); // Ubah menjadi string atau char
            $table->timestamps();
        });
    }
};
