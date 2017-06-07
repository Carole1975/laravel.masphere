<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
// use App\User;

class Annonce extends Model
{
	//declarer une relation inverse voir doc eloquent relations
	protected $fillable = [
    'statut',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}