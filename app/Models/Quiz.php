<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizes';

    protected $primaryKey = 'quizID';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'courseID'
    ];


    public function certificates()
    {
        return $this->hasOne(Certificate::class, 'quizID');
    }



    public function quizResults()
    {

        return $this->belongsToMany(User::class, 'quiz_resluts', 'quizID', 'userID');
    }



    public function courses()
    {
        return $this->belongsTo(Course::class, 'courseID');
    }
}
