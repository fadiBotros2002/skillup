<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


     protected $table = 'courses';

     protected $primaryKey = 'courseID';

     public $timestamps = true;

     protected $fillable = [
         'title', 'description', 'video_url', 'categoryID', 'userID'
     ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }

    public function certificates()
    {
        return $this->hasOne(Certificate::class, 'courseID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'courseID');
    }


    public function quizes()
    {
        return $this->hasOne(Quiz::class, 'courseID');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_courses', 'courseID', 'userID');

    }

}
