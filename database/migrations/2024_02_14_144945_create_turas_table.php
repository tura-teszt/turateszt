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
        Schema::create('turas', function (Blueprint $table) {
            $table->id();
            $table->integer('tipus'); 
            $table->date('idopont');

            $table->integer('turavezeto');
            $table->integer('ar'); 
            $table->integer('minLetszam'); 
            $table->integer('maxLetszam');








            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turas');
    }
};
