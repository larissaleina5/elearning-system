<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Payment extends Model
{
    use HasFactory;
    public function courses():BelongsTo{
        return $this->belongsTo(Course::class);
    }
    public function users():BelongsToMany{
        return $this->belongsToMany(User::class);
    }
}
