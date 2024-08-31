<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;


    public function certificates()
    {
        return $this->belongsTo(Certificate::class, 'quizID');
    }

    

    public function quizResults()
    {
        return $this->belongsTo(User::class, 'quizID');
    }



    public function courses()
    {
        return $this->belongsTo(Course::class, 'courseID');
    }


}
