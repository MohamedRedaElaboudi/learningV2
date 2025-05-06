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
        Schema::create('avoir', function (Blueprint $table) {
            $table->unsignedBigInteger('id_question');
            $table->unsignedBigInteger('id_ressource');
            $table->primary(['id_question', 'id_ressource']);
            $table->foreign('id_question')->references('id_question')->on('questions')->onDelete('cascade');
            $table->foreign('id_ressource')->references('id_ressource')->on('ressources')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
             Schema::dropIfExists('avoir');

    }
};
