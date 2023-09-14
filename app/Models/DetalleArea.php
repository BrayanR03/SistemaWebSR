<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleArea extends Model
{
    use HasFactory;
    protected $table="detalleareas";

// En el modelo DetalleArea
public function alumno()
{
    return $this->belongsTo(Alumno::class, 'AlumnoID','AlumnoID');
}

public function area()
{
    return $this->belongsTo(Area::class, 'AreaID','AreaID');
}


}
