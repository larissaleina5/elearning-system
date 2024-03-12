<?php

use App\Models\Proposition;
use App\Models\Question;
use App\Models\Quiz;
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
        Schema::create('proposition_question', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Question::class)
            ->constrained()
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignIdFor(Proposition::class)
            ->constrained()
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->boolean('isGoodOrFalse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposition_question');
    }
};
