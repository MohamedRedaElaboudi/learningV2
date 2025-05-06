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
        Schema::create('inscrire', function (Blueprint $table) {
            $table->unsignedBigInteger('id_personne');
            $table->unsignedBigInteger('id_classe');
            $table->date('date_inscription');
            $table->primary(['id_personne', 'id_classe']);
            $table->foreign('id_personne')->references('id_personne')->on('etudiants')->onDelete('cascade');
            $table->foreign('id_classe')->references('id_classe')->on('classes')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscrire');
    }
};
