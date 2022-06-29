<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ubicacion;

class UbicacionController extends Controller
{
    //

    public function store(Request $request)
    {
        $ubicacion= new Ubicacion;
        $ubicacion->nombre=$request->input('nombre');
        $ubicacion->save();
        return redirect()->route('registro_objeto');
    }
}

