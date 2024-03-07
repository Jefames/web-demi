<?php

namespace App\Http\Controllers;

use App\Models\ComunidadLinguistica;
use App\Models\Department;
use App\Models\escolaridad;
use App\Models\idioma;
use App\Models\municipio;
use App\Models\puebloper;
use App\Models\Registro_Atencion_Sedes;
use Illuminate\Http\Request;

class RegistroAtencionSedesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expedientesRAS = Registro_Atencion_Sedes::all();
        return view('services.registro_atencion_sedes.index', ['expedientes' => $expedientesRAS]);
    }

    public function show(Registro_Atencion_Sedes $registro_Atencion_Sedes)
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $escolaridades = escolaridad::all();
        $idiomas = idioma::all();
        $comlings = ComunidadLinguistica::all();
        $pueblopers = puebloper::all();
        $departamentos = Department::all();
        $municipios = municipio::all();
        return view('services.registro_atencion_sedes.create', compact('departamentos', 'escolaridades', 'idiomas', 'comlings', 'pueblopers', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'anio' => 'required|date_format:Y',
            'tipologia' => 'required|string|max:50',
            'rama_derecho' => 'required|string|max:50',
            'tipo_atencion' => 'required|string|max:50',
            'edad' => 'nullable|string|max:10',
            'cui' => 'nullable|string|max:13',
            'primer_apellido' => 'required|string|max:100',
            'segundo_apellido' => 'nullable|string|max:100',
            'apellido_casada' => 'nullable|string|max:100',
            'primer_nombre' => 'required|string|max:50',
            'segundo_nombre' => 'nullable|string|max:100',
            'tercer_nombre' => 'nullable|string|max:100',
            'sexo' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
            'ocupacion' => 'nullable|string|max:100',
            'trabaja' => 'required|boolean',
            'telefono' => 'nullable|string|max:15',
            'lugar_poblado' => 'required|string',
            'direccion_residencia' => 'required|string',
            'institucion' => 'required|string',
            'programa' => 'required|string',
            'beneficio' => 'required|string',
            'fecha_otorga_beneficio' => 'required|date',
            'valor' => 'nullable|string|max:100',
            'discapacidad' => 'nullable|string|max:100',
            'cantidad' => 'nullable|string|max:100',

        ]);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registro_Atencion_Sedes $registro_Atencion_Sedes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registro_Atencion_Sedes $registro_Atencion_Sedes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registro_Atencion_Sedes $registro_Atencion_Sedes)
    {
        //
    }
}
