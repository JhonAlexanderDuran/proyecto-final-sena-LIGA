<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
	protected$fillable =[
    	'name','document','phonenumber','rh', 'manager', 'eps', 'category', 'photo', 'state', 'club_id'
    ];

    public function scopeConsult($club, $deport){
    	$club->where('name', 'LIKE', "%name%");
    }

    public function club(){
    	return $this->belongsTo('App\Club');
    }
}
