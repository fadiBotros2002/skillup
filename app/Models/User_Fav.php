<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Fav extends Model
{
    use HasFactory;

    public function favsCourses()
    {
        return $this->belongsTo(FavCourse::class, 'favCoursesID');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }


}
