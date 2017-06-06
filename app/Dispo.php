<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispo extends Model
{
	protected $fillable = [
    'statut',
    ];
    
    protected $hidden = ['id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
