<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
    //Definir el nombre de la clave primaria
    protected $primaryKey = 'bodega_id';

    public $timestamps = false;

    //Relacion con Dispositivo
    public function dispositivos() {
        return $this->hasMany(Dispositivo::class, 'bodega_id', 'dispositivo_id');
    }
}
