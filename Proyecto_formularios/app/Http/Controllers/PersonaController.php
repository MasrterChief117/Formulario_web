<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class PersonaController extends Controller
{
    //
    public function store(Request $request)
    {
        $persona= new Persona;
        $persona->tipo_documento=$request->input('tipo_documento');
        $persona->num_documento=$request->input('num_documento');
        $persona->nombre=$request->input('nombre');
        $persona->email=$request->input('email');
        $persona->telefono=$request->input('telefono');
        $persona->save();
        return redirect()->route('registro_objeto');
    }
}
