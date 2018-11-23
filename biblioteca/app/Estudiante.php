<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    protected $fillable = ['nombre','cedula','carrera','direccion'];

    public function prestamos(){
    	return $this->hasMany('App\Prestamo');
    }
}
