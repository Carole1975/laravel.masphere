<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
// use App\User;

class Family extends Model
{
    public function user()
     {
         return $this->hasOne('App\User');
     }
}

x