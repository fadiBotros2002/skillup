<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;


    protected $table = 'certificates';

    protected $primaryKey = 'certificateID';

    public $timestamps = true;

    protected $fillable = [
        'userID', 'courseID', 'quizID', 'issued_at'
    ];


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
