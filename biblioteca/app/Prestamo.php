<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = "prestamosLibros";
    protected $fillable = ['fecha_prestamo','fecha_entrega'];

    public function libro()
    {
        return $this->hasOne('App\Libro');
    }

    public function estudiante(){
    	return $this->belongsTo('App\Estudiante');
    }

    public function empleado(){
    	return $this->belongsTo('App\Empleado');
    }
    

}
