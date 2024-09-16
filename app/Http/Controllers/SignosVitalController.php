<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignosVital;
use App\Models\Filiacion;

class SignosVitalController extends Controller
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
        // Mostrar todos los signos vitales
        $signosVitales = SignosVital::all();
        return view('signos_vitales.index')->with('signosVitales', $signosVitales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostrar el formulario para crear nuevos signos vitales
        $filiacions = Filiacion::all(); // Para el selector de filiaciones
        return view('signos_vitales.create')->with('filiacions', $filiacions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'filiacion_id' => 'required|exists:filiacions,id',
            'presion_arterial' => 'nullable|numeric',
            'temperatura' => 'nullable|numeric',
            'frecuencia_respiratoria' => 'nullable|numeric',
            'pulso' => 'nullable|integer',
        ]);

        // Crear una nueva entrada de signos vitales
        $signosVital = new SignosVital();
        $signosVital->filiacion_id = $request->get('filiacion_id');
        $signosVital->presion_arterial = $request->get('presion_arterial');
        $signosVital->temperatura = $request->get('temperatura');
        $signosVital->frecuencia_respiratoria = $request->get('frecuencia_respiratoria');
        $signosVital->pulso = $request->get('pulso');
        $signosVital->save();

        return redirect('/signos_vitales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $signosVital = SignosVital::findOrFail($id); // Buscar signos vitales por ID
        return view('signos_vitales.show')->with('signosVital', $signosVital);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $signosVital = SignosVital::findOrFail($id);
        $filiacions = Filiacion::all(); // Para el selector de filiaciones
        return view('signos_vitales.edit')->with([
            'signosVital' => $signosVital,
            'filiacions' => $filiacions,
        ]);
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
        $request->validate([
            'filiacion_id' => 'required|exists:filiacions,id',
            'presion_arterial' => 'nullable|numeric',
            'temperatura' => 'nullable|numeric',
            'frecuencia_respiratoria' => 'nullable|numeric',
            'pulso' => 'nullable|integer',
        ]);

        $signosVital = SignosVital::findOrFail($id);
        $signosVital->filiacion_id = $request->get('filiacion_id');
        $signosVital->presion_arterial = $request->get('presion_arterial');
        $signosVital->temperatura = $request->get('temperatura');
        $signosVital->frecuencia_respiratoria = $request->get('frecuencia_respiratoria');
        $signosVital->pulso = $request->get('pulso');
        $signosVital->save();

        return redirect('/signos_vitales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $signosVital = SignosVital::findOrFail($id);
        $signosVital->delete();

        return redirect('/signos_vitales');
    }
}
