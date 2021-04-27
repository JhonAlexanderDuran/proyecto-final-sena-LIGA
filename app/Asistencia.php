<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public function escuela() {
    	return $this->belongsTo('App\Escuela', 'escula_id');
    }
}
