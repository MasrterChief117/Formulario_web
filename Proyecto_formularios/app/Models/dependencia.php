<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dependencia extends Model
{
    //use HasFactory;
    protected $table="dependencias";
    protected $primaryKey="id";
    protected $fillable=["nombre"];

    public $timestamps=false;
}
