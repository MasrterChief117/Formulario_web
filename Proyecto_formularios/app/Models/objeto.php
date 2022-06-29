<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objeto extends Model
{
    //use HasFactory;
    protected $table="objetos";//nombre de la tabla de la bd
    protected $primaryKey="id";
    protected $fillable=["placa","nombre","serial","marca_id","modelo","caracteristicas","tipo_id","observaciones","aplica_movilidad","dependencia_id","ubicacion_real_id","ubicacion_inventario_id"];

    public $timestamps=false;
}
