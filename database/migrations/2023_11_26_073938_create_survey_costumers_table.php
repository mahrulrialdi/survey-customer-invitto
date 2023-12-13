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
            $table->json('question_1')->nullable();
            $table->json('question_2')->nullable();
            $table->json('question_3')->nullable();
            $table->json('question_4')->nullable();
            $table->text('question_5')->nullable();
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
