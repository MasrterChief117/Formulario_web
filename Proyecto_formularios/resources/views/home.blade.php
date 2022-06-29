@extends('plantilla')

@section('content')

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">LIGRED</h5>
    <p class="card-text">Todo lo relacionado con el inventario del LIGRED</p>
    <a href="{{ route('buscador') }}" class="btn btn-primary">VER</a>
  </div>
</div>

@endsection