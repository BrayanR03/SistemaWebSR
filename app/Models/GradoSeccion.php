<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradoSeccion extends Model
{
    use HasFactory;
    protected $table="gradossecciones";

    // En el modelo GradoSeccion
public function grado()
{
    return $this->belongsTo(Grado::class, 'GradoID','GradoID');
}
// En el modelo GradoSeccion
public function seccion()
{
    return $this->belongsTo(Seccion::class, 'SeccionID','SeccionID');
}

}
