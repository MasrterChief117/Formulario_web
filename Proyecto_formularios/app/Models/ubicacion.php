<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    //use HasFactory;
    protected $table="ubicacions";//nombre de la tabla de la bd
    protected $primaryKey="id";
    protected $fillable=["nombre"];

    public $timestamps=false;
}
