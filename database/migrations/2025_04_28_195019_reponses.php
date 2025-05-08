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
        Schema::create('reponses', function (Blueprint $table) {
            $table->id('id_reponse');
            $table->text('reponse');
            $table->timestamps();
            $table->unsignedBigInteger('id_question');

            $table->foreign('id_question')
                ->references('id_question')
                ->on('questions')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_reply');

            $table->foreign('id_reply')
                ->references('id_reponse')
                ->on('reponses')
                ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reponses');
    }
};
