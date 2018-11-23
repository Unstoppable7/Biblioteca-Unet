<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	protected $table = "empleados";
    protected $fillable = ['nombre','cedula','puesto','direccion'];
    
    public function prestamos(){
    	return $this->hasMany('App\Prestamo');
    }
}
