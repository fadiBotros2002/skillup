<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }

    public function certificates()
    {
        return $this->belongsTo(Certificate::class, 'courseID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'courseID');
    }


    public function quizes()
    {
        return $this->belongsTo(Quiz::class, 'courseID');
    }

    public function users_courses()
    {
        return $this->hasMany(User_Course::class, 'courseID');
    }

}
