<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavCourse extends Model
{
    use HasFactory;

    public function users_favs()
    {
        return $this->hasMany(User_Fav::class, 'favCoursesID');
    }
}
