<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apoderado;
use App\Models\Alumno;
use App\Http\Requests\CreateApoderadoRequest;
use Illuminate\Support\Facades\Storage;
class ApoderadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $user_id=session('id');
        //$apoderado=Apoderado::get(); //JALAR TODOS LOS DATOS
        $apoderado=Apoderado::with('alumno')->where('UsuarioID', $user_id)->get(); //FILTRADO DE APODERADO
        // $apoderadoID=$apoderado->ApoderadoID;
        //$alumno=Alumno::where('ApoderadoID',$apoderadoID)->get();
        //$apoderado = Apoderado::with('alumnos')->where('UsuarioID', $user_id)->first();
        
        return view('apoderado',compact('apoderado'));
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
    public function show($ApoderadoID)
    {
        return view('showapoderado',[
            'apoderado'=>Apoderado::find($ApoderadoID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apoderado $apoderado)
    {
        return view('editapoderado',[
            'apoderado'=>$apoderado
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateApoderadoRequest $request, Apoderado $apoderado)
    {
        if ($request->hasFile('image')) {
           // Storage::delete($apoderado->image);
            $apoderado->fill($request->validated());
            $apoderado->image=$request->file('image')->store('images');
            $apoderado->save();
        } else {
            $apoderado->update(array_filter($request->validated()));
        }
        return redirect()->route('apoderado.index',$apoderado);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
