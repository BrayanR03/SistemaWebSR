<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAlumnoRequest;
use App\Models\Alumno;
use App\Models\Apoderado;
use App\Models\Grado;
use App\Models\Seccion;
use App\Models\GradoSeccion;
use Illuminate\Support\Facades\Storage;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id=session('id');
        //$alumno=Alumno::get();//MOSTRAR TODOS LOS ALUMNOS
        //$alumno=Apoderado::with('alumno')->where('UsuarioID', $user_id)->get();
        
        $apoderado=Apoderado::where('UsuarioID',$user_id)->first();

        if ($apoderado) {
            $apoderadoID=$apoderado->ApoderadoID;
            
            $alumno=Alumno::with(['gradoSeccion.grado','gradoSeccion.seccion'])
            ->where('ApoderadoID',$apoderadoID)
            ->get();
        } 
        
        
        return view('alumno',compact('alumno'));
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
    public function show($AlunmoID)
    {
        return view('showalumno',[
            'alumno'=>Alumno::find($AlunmoID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('editalumno',[
            'alumno'=>$alumno
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Alumno $alumno,CreateAlumnoRequest $request)
    {
        if ($request->hasFile('image')) {
           // Storage::delete($alumno->image);
            $alumno->fill($request->validated());
            $alumno->image=$request->file('image')->store('images');
            $alumno->save();
        } else {
            $alumno->update(array_filter($request->validated()));
        }
        return redirect()->route('alumno.index',$alumno);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
