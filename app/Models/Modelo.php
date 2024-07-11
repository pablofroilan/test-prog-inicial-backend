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
}
