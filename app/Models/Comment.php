<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;



     protected $table = 'comments';

     protected $primaryKey = 'commentID';

     public $timestamps = true;

     protected $fillable = [
         'content', 'userID', 'courseID'
     ];

    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'courseID');
    }
}
