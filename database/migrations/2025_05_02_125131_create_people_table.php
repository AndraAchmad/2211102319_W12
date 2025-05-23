<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('people', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('nama_panggilan');
        $table->string('nim')->unique();
        $table->string('email')->unique();
        $table->string('foto')->nullable(); // untuk menyimpan nama file foto
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
