<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavCourse extends Model
{
    use HasFactory;


    protected $table = 'favCourses';

    protected $primaryKey = 'favCoursesID';

    public $timestamps = true;

    protected $fillable = [
        'userID',
        'courseID'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_courses', 'courseID', 'userID');
    }
}
