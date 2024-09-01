<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Fav extends Model
{
    use HasFactory;

    protected $table = 'users_favs';

    protected $primaryKey = 'userFavID';

    public $timestamps = true;

    protected $fillable = [
        'userID', 'favCoursesID'
    ];



}
