<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Course extends Model
{
    use HasFactory;


    protected $table = 'users_courses';

    protected $primaryKey = 'users_coursesID';

    public $timestamps = true;

    protected $fillable = [
        'userID', 'courseID'
    ];

}
