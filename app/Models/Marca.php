<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    //Definir el nombre de la clave primaria
    protected $primaryKey = 'marca_id';

    public $timestamps = false;

    //Relacion con modelo
     public function modelos() {
        return $this->hasMany(Modelo::class, 'marca_id', 'modelo_id');
     }
}
