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
        Schema::create('survey_costumer_complains', function (Blueprint $table) {
            $table->id();
            $table->enum('question_1', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_2', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_3', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_4', ['Setuju', 'Tidak Setuju']);
            $table->text('question_5');
            $table->text('question_6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_costumer_complains');
    }
};
