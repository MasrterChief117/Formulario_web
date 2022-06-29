<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dependencia;

class DependenciaController extends Controller
{
    //
    public function store(Request $request)
    {
        $dependencia= new Dependencia;
        $dependencia->nombre=$request->input('nombre');
        $dependencia->save();
        return redirect()->route('registro_objeto');
    }
}
