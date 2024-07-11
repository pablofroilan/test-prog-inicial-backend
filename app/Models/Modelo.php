<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    //Definir el nombre la clave primaria
    protected $primaryKey = 'modelo_id';

    public $timestamps = false;

    //Relacion con Marca
    public function marca() {
        return $this->belongsTo(Marca::class, 'marca_id', 'modelo_id');
    }

    //Relacion con Dispositivo
    public function dispositivos() {
        return $this->hasMany(Dispositivo::class, 'modelo_id', 'dispositivo_id');
    }
}
