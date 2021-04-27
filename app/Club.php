<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Club extends Model
{
    protected$fillable =[
    	'name','nit','city','phonenumber', 'user_id'
    ];

    public function deports(){

        return $this->hasMany('App\Deportista');
     }

    public function user(){

        return $this->belongsTo('App\User');
     }


}
