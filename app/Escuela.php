<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = [
        'name', 'document', 'phonenumber', 'adress', 'manager', 'rh', 'eps', 'birthdate', 'category', 'photo', 'observation'
    ];

    public function pagos() {
    	return $this->hasMany('App\Pago');
    }

    public function asistencias() {
    	return $this->hasMany('App\Asistencia', 'escula_id');
    }

    public function scopeName($escuelas, $name){

        if (trim($name)!='') {
            
            $escuelas->where('name','LIKE',"%$name%")->orWhere('document','LIKE',"%$name%");
        }
    }
}
