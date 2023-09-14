<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id=session('id');
        //$areas=Area::get();
        $areas = Area::with('detalleAreas.alumno.apoderado', 'docente')->get();
        return view('areas',compact('areas'));
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
    public function show($AreaID)
    {
        return view('showareas',[
            'area'=>Area::find($AreaID)
        ]);
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
