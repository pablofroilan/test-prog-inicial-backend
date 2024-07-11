<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;
    //Definir el nombre de la clave primaria
    protected $primaryKey = 'dispositivo_id';

    public $timestamps = false;
    
    //Relación con Bodega
    public function modelo() {
        return $this->belongsTo(Modelo::class, 'modelo_id', 'dispositivo_id');
    }
    //Relación con Modelo
    public function bodega() {
        return $this->belongsTo(Bodega::class, 'bodega_id', 'dispositivo_id');
    }
}
