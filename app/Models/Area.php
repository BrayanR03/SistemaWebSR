<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $primaryKey="AreaID";

// En el modelo Area
public function detalleAreas()
{
    return $this->hasMany(DetalleArea::class, 'AreaID','AreaID');
}

public function docente()
{
    return $this->belongsTo(Docente::class, 'DocenteID','DocenteID');
}

// En el modelo Area.php
public function alumnos()
{
    return $this->belongsToMany(Alumno::class, 'detalleareas', 'AreaID', 'AlumnoID');
}


}
