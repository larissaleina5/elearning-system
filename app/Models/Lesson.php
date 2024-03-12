<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\Course;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;
    public function quiz():BelongsToMany{
        return $this->belongsToMany(Quiz::class);
    }
    public function result():HasMany{
        return $this->hasMany(Result::class);
    }
    public function course():BelongsTo{
        return $this->belongsTo(Course::class);
    }
    public function quizes():BelongsToMany{
        return $this->belongsToMany(Quiz::class);
    }

    public function chapters():HasMany{

        return $this->hasMany(Chapter::class);
    }

    public function questions():HasMany{
        return $this->hasMany(Question::class);
    }
}
