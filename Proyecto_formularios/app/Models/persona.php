<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    //use HasFactory;
    protected $table="personas";//nombre de la tabla de la bd
    protected $primaryKey="id";
    protected $fillable=["tipo_documento","num_documento","nombre","email","telefono"];

    public $timestamps=false;
}
