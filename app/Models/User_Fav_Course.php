<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Fav_Course extends Model
{
    use HasFactory;



    protected $table = 'users_favs_courses';

    protected $primaryKey = 'userFavCourseID';

    public $timestamps = true;

    protected $fillable = [
        'userID', 'courseID'
    ];
}
