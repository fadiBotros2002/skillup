<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $table = 'profiles';

    protected $primaryKey = 'profileID';

    public $timestamps = true;

    protected $fillable = [
        'userID',
        'bio',
        'profile_picture',
        'birthdate',
        'phone',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

}
