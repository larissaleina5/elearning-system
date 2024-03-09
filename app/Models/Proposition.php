<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Proposition extends Model
{
    use HasFactory;
    public function questions():HasMany{
        return $this->hasmany(Question::class);

    }
    public function quiz():BelongsToMany{
        return $this->belongsToMany(Quiz::class)->withPivot('isGoodOrFalse');
    }
}
