<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiacion;
use Illuminate\Routing\Controller as BaseController;

class FiliacionController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiacions = Filiacion::all();
        return view('filiacion.index')->with('filiacions', $filiacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filiacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filiacion = new Filiacion();
        $filiacion->numero_ficha_clinico = $request->get('numero_ficha_clinico');
        $filiacion->nombre = $request->get('nombre');
        $filiacion->apellido = $request->get('apellido');
        $filiacion->asegurado = $request->get('asegurado');
        $filiacion->edad = $request->get('edad');
        $filiacion->disciplina = $request->get('disciplina');
        $filiacion->posicion_prueba = $request->get('posicion_prueba');
        $filiacion->ocupacion = $request->get('ocupacion');
        $filiacion->peso = $request->get('peso');
        $filiacion->talla = $request->get('talla');
        $filiacion->imc = $request->get('imc');
        $filiacion->procedencia = $request->get('procedencia');
        $filiacion->direccion = $request->get('direccion');
        $filiacion->telefono = $request->get('telefono');
        $filiacion->asociacion_club = $request->get('asociacion_club');
        $filiacion->fisioterapeuta_kinesiologo = $request->get('fisioterapeuta_kinesiologo');
        $filiacion->fecha_evaluacion = $request->get('fecha_evaluacion');
        $filiacion->save();

        return redirect('/filiacions');
    }
    public function show($id)
    {   
    $filiacion = Filiacion::findOrFail($id); // Busca la filiación o muestra un error 404
    return view('filiacion.show')->with('filiacion', $filiacion);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiacion = Filiacion::find($id);
        return view('filiacion.edit')->with('filiacion', $filiacion);
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
        $filiacion = Filiacion::find($id);
        $filiacion->numero_ficha_clinico = $request->get('numero_ficha_clinico');
        $filiacion->nombre = $request->get('nombre');
        $filiacion->apellido = $request->get('apellido');
        $filiacion->asegurado = $request->get('asegurado');
        $filiacion->edad = $request->get('edad');
        $filiacion->disciplina = $request->get('disciplina');
        $filiacion->posicion_prueba = $request->get('posicion_prueba');
        $filiacion->ocupacion = $request->get('ocupacion');
        $filiacion->peso = $request->get('peso');
        $filiacion->talla = $request->get('talla');
        $filiacion->imc = $request->get('imc');
        $filiacion->procedencia = $request->get('procedencia');
        $filiacion->direccion = $request->get('direccion');
        $filiacion->telefono = $request->get('telefono');
        $filiacion->asociacion_club = $request->get('asociacion_club');
        $filiacion->fisioterapeuta_kinesiologo = $request->get('fisioterapeuta_kinesiologo');
        $filiacion->fecha_evaluacion = $request->get('fecha_evaluacion');
        $filiacion->save();

        return redirect('/filiacions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiacion = Filiacion::find($id);        
        $filiacion->delete();

        return redirect('/filiacions');
    }
}
