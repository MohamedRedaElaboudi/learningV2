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
        Schema::create('ressources', function (Blueprint $table) {
            $table->id('id_ressource');
            $table->string('titre_ressource');
            $table->string('emplacement');
            $table->string('type');
            $table->timestamps();
            $table->unsignedBigInteger('professeur_id')->nullable();
            $table->foreign('professeur_id')->references('id_personne')->on('professeurs')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ressources');

    }
};
