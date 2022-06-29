<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marca;

class MarcaController extends Controller
{
    //
    public function store(Request $request)
    {
        $marca= new Marca;
        $marca->nombre=$request->input('nombre');
        $marca->save();
        return redirect()->route('registro_objeto');
    }

    
}
