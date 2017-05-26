<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
        use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_id',
    ];
}
