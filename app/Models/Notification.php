<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';

    protected $primaryKey = 'notificationID';

    public $timestamps = true;

    protected $fillable = [
        'userID',
        'content'
    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
