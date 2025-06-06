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
        Schema::create('classes', function (Blueprint $table) {
            $table->id('id_classe');
            $table->string('classe_nom');
            $table->string('code_classe')->unique();
            $table->timestamps();

            $table->unsignedBigInteger('id_prof');
            
        
            $table->foreign('id_prof')->references('id_personne')->on('professeurs')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
