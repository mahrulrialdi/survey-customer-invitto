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
        Schema::create('survey_costumers', function (Blueprint $table) {
            $table->id();
            $table->enum('question_1', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_2', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_3', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_4', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_5', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_6', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_7', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_8', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_9', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_10', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_11', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_12', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_13', ['Setuju', 'Tidak Setuju']);
            $table->enum('question_14', ['Setuju', 'Tidak Setuju']);
            $table->text('question_15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_costumers');
    }
};
