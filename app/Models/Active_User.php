<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active_User extends Model
{
    use HasFactory;

    protected $table = 'active_users';


    protected $primaryKey = 'activeUserID';


    public $timestamps = true;


    protected $fillable = [
        'isActive',
    ];


    public function users()
    {
        return $this->hasMany(User::class, 'activeUserID');
    }
}
