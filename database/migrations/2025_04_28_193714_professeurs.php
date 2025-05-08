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
        Schema::create('professeurs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_personne')->primary();
            $table->text('biographie')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('id_admin');

            $table->foreign('id_personne')->references('id_personne')->on('personnes')->onDelete('cascade');

            $table->foreign('id_admin')->references('id_personne')->on('professeurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeurs');
    }
};
