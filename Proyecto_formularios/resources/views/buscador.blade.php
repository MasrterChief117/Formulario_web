@extends('plantilla')

@section('content')
aqui va a estar el buscador por placa
<div class='btnagregar'>
    <a class="btn btn-primary" href="{{ route('registro_objeto') }}" role="button">Agregar Nuevo</a>
</div>
aqui va a estar los resultados de la busqueda
@endsection