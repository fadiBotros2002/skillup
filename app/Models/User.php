<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;




    protected $table = 'users';

    protected $primaryKey = 'userID';

    public $timestamps = true;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roleID',
        'activeUserID',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function role()
    {
        return $this->belongsTo(Role::class, 'roleID');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'userID');
    }

    public function activeUser()
    {
        return $this->belongsTo(Active_User::class, 'activeUserID');
    }


    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'userID');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'userID');
    }




    public function quizes()
    {
        return $this->belongsToMany(Quiz::class, 'quiz_results', 'userID', 'quizID');
    }


    public function courses()
    {

        return $this->belongsToMany(Course::class, 'users_courses', 'userID', 'courseID');
    }


    // the middle table between  users and courses (favourate course for each user)
    public function fav_courses()
    {

        return $this->belongsToMany(Course::class, 'users_favs_courses', 'userID', 'courseID');
    }

    public function profiles()
    {
        return $this->hasOne(Profile::class, 'userID', 'userID');
    }
}
