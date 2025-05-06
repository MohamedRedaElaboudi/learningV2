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
        Schema::create('repondre', function (Blueprint $table) {
            $table->unsignedBigInteger('id_personne');
            $table->unsignedBigInteger('id_reponse');
            $table->primary(['id_personne', 'id_reponse']);
            $table->foreign('id_personne')->references('id_personne')->on('etudiants')->onDelete('cascade');
            $table->foreign('id_reponse')->references('id_reponse')->on('reponses')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repondre');

    }
};
