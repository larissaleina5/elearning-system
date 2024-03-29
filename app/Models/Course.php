<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lesson;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'course_description',
        'level',
        'status',
        'user_id',
        'course_profile'

    ];
    public function students():BelongsToMany{
return $this->belongsToMany(User::class);
    }
    public function teacher():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }
    public function payment():HasMany{
        return $this->hasMany(Payment::class);
    }

    public function lessons():HasMany{

        return $this->hasMany(Lesson::class);
    }

}
