<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";
    protected $fillable = ['nombre','editorial','anio','ubicacionBiblioteca','autor','tipo_id','areaConocimiento','diasPrestamo'];

     public function tipo(){
    	return $this->belongsTo('App\Tipo');
    }

    public function prestamo()
    {
        return $this->hasOne('App\Prestamo');
    }
}

