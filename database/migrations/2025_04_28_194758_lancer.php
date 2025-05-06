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
        Schema::create('lancer', function (Blueprint $table) {
            $table->unsignedBigInteger('id_notification')->primary();
            $table->unsignedBigInteger('id_ressource');
            $table->foreign('id_notification')->references('id_notification')->on('notifications')->onDelete('cascade');
            $table->foreign('id_ressource')->references('id_ressource')->on('ressources')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lancer');

    }
};
