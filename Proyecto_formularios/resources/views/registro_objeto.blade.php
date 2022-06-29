@extends('plantilla')

@section('content')

<div>
<form action="{{route('objeto.store')}}" method="POST">
        <ul>
            <div>
                <br>
                <label for="placa">Ingrese la placa del objeto:</label>
                <br>
                <input type="text" id="placa" name="placa" placeholder="placa del objeto">
                <br>
            </div>
            <div>
                <br>
                <label for="nombre">Nombre del objeto:</label>
                <br>
                <input type="text" id="nombre" name="nombre" placeholder="nombre del objeto">
                <br>
            </div>
            <div>
                <br>
                <label for="serial">Serial del objeto:</label>
                <br>
                <input type =text id="serial" name="serial" placeholder="serial del objeto">
                <br>
            </div>
            <div>
                <br>
                <label for="marca_id" class="form-label">Marca del objeto:</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>elija el tipo</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class='btnagregar'>
                    <a class="btn btn-primary" href="{{ route('registro_marca') }}" role="button">Nueva marca</a>
                </div>
                <br>
            </div>
            <div>
                <br>
                <label for="modelo">Modelo del objeto:</label>
                <br>
                <input type =text id="modelo" name="modelo" placeholder="modelo del objeto">
                <br>
            </div>
            <div>
                <br>
                <label for="caracteristicas">Caracteristicas del objeto:</label>
                <br>
                <textarea  id="caracteristicas" name="caracteristicas" placeholder="caracteristicas del objeto" rows="5"></textarea>
                <br>
            </div>
            <div>
                <br>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>elija el tipo</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class='btnagregar'>
                    <a class="btn btn-primary" href="{{ route('registro_tipo') }}" role="button">Nuevo tipo</a>
                </div>
                <br>
            </div>
            <div>
                <br>
                <label for="observaciones">Observaciones del objeto:</label>
                <br>
                <textarea  id="observaciones" name="observaciones" placeholder="observaciones del objeto" rows="5"></textarea>
                <br>
            </div>
            <div>
                <br>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>aplica movilidad</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                <br>
            </div>
            <div>
                <br>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>elija la dependencia</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class='btnagregar'>
                    <a class="btn btn-primary" href="{{ route('registro_dependencia') }}" role="button">Nueva dependencia</a>
                </div>
                <br>
            </div>
            <div>
                <br>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>elija la ubicacion real</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class='btnagregar'>
                    <a class="btn btn-primary" href="{{ route('registro_ubicacion') }}" role="button">Nueva ubicacion</a>
                </div>
                <br>
            </div>
            <div>
                <br>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>elija la ubicacion en inventario</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class='btnagregar'>
                    <a class="btn btn-primary" href="{{ route('registro_ubicacion') }}" role="button">Nueva ubicacion</a>
                </div>
                <br>
            </div>
            
                
            <br>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button class="btn btn-primary" type="submit">Guardar Registro</button>
            </div>
        </ul>
    </form>  
</div>

@endsection