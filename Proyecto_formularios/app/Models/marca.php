<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $table="marcas";
    protected $primaryKey="id";
    protected $fillable=["nombre"];

    public $timestamps=false;
}
