<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Quiz extends Model
{
    use HasFactory;
    public function courses():BelongsTo{
        return $this->belongsTo(Course::class);
    }
    public function proposition():HasMany{
        return $this->hasMany(Proposition::class);
    }
    public function lessons():BelongsToMany{
        return $this->belongsToMany(Lesson::class);

    }
public function questions():BelongsToMany{
        return $this->belongsToMany(Question::class);

    }
}
