<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    
    protected $fillable = [
        'number', 'payment', 'concept', 'value', 'escula_id',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function escuela() {
    	return $this->belongsTo('App\Escuela', 'escula_id');
    }
}
