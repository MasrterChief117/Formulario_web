<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\objeto; 
use App\Models\marca; 

class ObjetoController extends Controller
{
    //
    public function store(Request $request)
    {
        $objeto= new Objeto;
        $objeto->placa=$request->input('placa');
        $objeto->nombre=$request->input('nombre');
        $objeto->serial=$request->input('serial');
        $objeto->marca_id=$request->input('marca_id');
        $objeto->modelo=$request->input('modelo');
        $objeto->caracteristicas=$request->input('caracteristicas');
        $objeto->tipo_id=$request->input('tipo_id');
        $objeto->observaciones=$request->input('observaciones');
        $objeto->aplica_movilidad=$request->input('aplica_movilidad');
        $objeto->dependencia_id=$request->input('dependencia_id');
        $objeto->ubicacion_real_id=$request->input('ubicacion_real_id');
        $objeto->ubicacion_inventario_id=$request->input('ubicacion_inventario_id');
        $objeto->save();
        return redirect()->route('registro_responsable');
    }
    public function index(){
        $objetos =Objeto::all();
        $marcas = Marcas::all();
        return view('objetos.index', ['objeto'-> $objeto, 'marcas' ->$marcas]);
    }
}
