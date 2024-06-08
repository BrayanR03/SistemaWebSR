<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Apoderado;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;
class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $user_id=session('id');
        $apoderado = Apoderado::where('UsuarioID', $user_id)->first();
        if($apoderado){
            $alumnos = Alumno::where('ApoderadoID', $apoderado->ApoderadoID)->get();
            $asistencias = collect();
            foreach ($alumnos as $alumno) {
                if ($alumno->asistencias) {
                    $asistencias = $asistencias->concat($alumno->asistencias);
                }
                $areasAlumno = $alumno->areas()->get();
            $alumno->areas = $areasAlumno;
            }
            $resultados = DB::select('CALL ReporteAsistenciasApoderado(?)', [$user_id]);
        return view('asistencias',compact('asistencias','resultados'));
        }
    }
    public function indexarea($AreaID)
    {
        
        $user_id=session('id');
        $apoderado = Apoderado::where('UsuarioID', $user_id)->first();
        if($apoderado){
            $alumnos = Alumno::where('ApoderadoID', $apoderado->ApoderadoID)->get();
            $asistencias = collect();
            foreach ($alumnos as $alumno) {
                if ($alumno->asistencias) {
                    $asistencias = $asistencias->concat($alumno->asistencias->where('AreaID',$AreaID));
                    //dd($asistencias);
                }
                $areasAlumno = $alumno->areas()->get();
            $alumno->areas = $areasAlumno;
            }
            //$asistencias=DB::selectResultSets("CALL ReporteAsistenciasApoderado(?)",[$user_id]);
            
        return view('asistenciasareas',compact('asistencias'));
        }
    }


public function getReporteAsistencias()
{
    $user_id = session('id');
    //$resultados=DB::select('CALL ReporteAsistenciasApoderado(?)',[$user_id]);
    $resultados=DB::selectResultSets("CALL ReporteAsistenciasApoderado(?)",[$user_id]);
    return view('asistenciasareas',compact('resultados'));
    
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
