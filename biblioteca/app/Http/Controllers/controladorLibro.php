<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Libro;
use App\Tipo;


class controladorLibro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::orderBy('id','asc')->paginate(10);
        $tipos = Tipo::all();
        return view('crearLibro')->with('libros',$libros)->with('tipos',$tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $l = new Libro();
        $l->nombre = $request->nombre;
        $l->editorial = $request->Editorial;
        $l->tipo_id = $request->Tipos;
        $l->areaConocimiento = $request->areaConocimiento;
        $l->autor = $request->Autor;
        $l->anio = $request->Año;
        $l->ubicacionBiblioteca = $request->UbicacionBiblioteca;
        $l->diasPrestamo = $request->diasPrestamo;
       
        $l->save();

        return view('home');
        /**
        $this->validate($request, [
            'nombre' => 'required',
            'editorial' => 'required',
            'anio' => 'required',
            'ubicacionBiblioteca' => 'required',
            'diasPrestamo' => 'required'
        ]);
        $requestData = $request->all();
        
        **/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libro::destroy($id);
        return view('home');

    }
}
