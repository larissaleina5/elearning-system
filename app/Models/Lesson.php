<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\Course;
use App\Models\Result;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lesson extends Model
{
    use HasFactory;
    public function quiz():BelongsToMany{
        return $this->belongsToMany(Quiz::class);
    }
    public function result():HasMany{
        return $this->hasMany(Result::class);
    }
    public function courses():BelongsToMany{
        return $this->belongsToMany(Course::class);
    }
    public function quizes():BelongsToMany{
        return $this->belongsToMany(Quiz::class);
    }
}
