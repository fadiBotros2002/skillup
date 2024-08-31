<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
    public function courses()
    {
        return $this->belongsTo(Course::class, 'courseID');
    }
    public function quizes()
    {
        return $this->belongsTo(Quiz::class, 'quizID');
    }

}
