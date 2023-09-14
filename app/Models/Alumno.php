<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $primaryKey="AlumnoID";
    protected $guarded=[];


    // En el modelo Apoderado
public function alumno()
{
    return $this->belongsTo(Alumno::class, 'ApoderadoID', 'AlumnoID');
}

// En el modelo Alumno
public function gradoSeccion()
{
    return $this->belongsTo(GradoSeccion::class, 'GradoSeccionID','GradoSeccionID');
}

public function grado()
{
    return $this->belongsTo(Grado::class, 'GradoID','GradoID');
}

public function seccion()
{
    return $this->belongsTo(Seccion::class, 'SeccionID','SeccionID');
}

// En el modelo Alumno
public function apoderado()
{
    return $this->belongsTo(Apoderado::class, 'ApoderadoID','ApoderadoID');
}

public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'AlumnoID','AlumnoID');
    }

    public function detalleAreas()
    {
        return $this->hasMany(DetalleArea::class, 'AlumnoID','AlumnoID');
    }
    // En el modelo Alumno.php
public function areas()
{
    return $this->belongsToMany(Area::class, 'detalleareas', 'AlumnoID', 'AreaID');
}

}
