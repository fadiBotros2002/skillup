<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavCat extends Model
{
    use HasFactory;


    protected $table = 'users_favs_cat';
    protected $primaryKey = 'userfavID';

    protected $fillable = [
        'userID',
        'CategoryID',
    ];

    

}
