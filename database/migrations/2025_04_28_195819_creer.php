?php

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
        Schema::create('creer', function (Blueprint $table) {
            $table->unsignedBigInteger('id_personne');
            $table->unsignedBigInteger('id_question');
            $table->primary(['id_personne', 'id_question']);
            $table->foreign('id_personne')->references('id_personne')->on('etudiants')->onDelete('cascade');
            $table->foreign('id_question')->references('id_question')->on('questions')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creer');

    }
};
