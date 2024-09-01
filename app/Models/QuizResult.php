<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;

    protected $table = 'quiz_results';

    protected $primaryKey = 'resultID';

    public $timestamps = true;

    protected $fillable = [
        'userID',
        'quizID',
        'score',
        'passed',
        'completed_at'
    ];
}
