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
        Schema::create('recevoir', function (Blueprint $table) {
            $table->unsignedBigInteger('id_personne');
            $table->unsignedBigInteger('id_ressource');
            $table->string('message');

            $table->primary(['id_personne', 'id_ressource']);

            $table->foreign('id_personne')
                ->references('id_personne')
                ->on('etudiants')
                ->onDelete('cascade');

            $table->foreign('id_ressource')
                ->references('id_ressource')
                ->on('ressources')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recevoir');
    }
};
