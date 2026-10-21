<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     protected $table = 'messages';

    protected $fillable = [
        'nom',
        'email',
        'message',
    ];
     public $timestamps = false;
}
