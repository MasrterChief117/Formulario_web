<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo;

class TipoController extends Controller
{
    //
    public function store(Request $request)
    {
        $tipo= new Tipo;
        $tipo->nombre=$request->input('nombre');
        $tipo->save();
        return redirect()->route('registro_objeto');
    }
}
