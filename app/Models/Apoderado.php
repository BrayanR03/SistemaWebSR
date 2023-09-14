<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    use HasFactory;
    protected $primaryKey="ApoderadoID";
    protected $guarded=[];
    
    public function user()
{
   // return $this->belongsTo(User::class);
}
// En el modelo Apoderado
public function alumno()
{
    // Establece la relación de Apoderado a Alumno
    return $this->belongsTo(Alumno::class, 'ApoderadoID', 'AlumnoID');
}

// En el modelo Apoderado

}
