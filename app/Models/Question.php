<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\Lesson;
use App\Models\Proposition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    use HasFactory;
    public function propositions():BelongsToMany{
        return $this->belongsToMany(Proposition::class)->withPivot('isGoodOrFalse');
    }
    public function lesson():BelongsTo{
        return $this->belongsTo(Lesson::class);
    }
}
