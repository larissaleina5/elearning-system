<?php

use App\Models\Lesson;
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
        Schema::create('lesson_quizes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Quiz::class)
            ->constrained()
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignIdFor(Lesson::class)
            ->constrained()
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_quizes');
    }
};
