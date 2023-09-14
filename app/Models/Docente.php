<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $primaryKey="DocenteID";
    
    // En el modelo Docente
public function areas()
{
    return $this->hasMany(Area::class, 'DocenteID','DocenteID');
}

}
