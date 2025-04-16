@extends('layouts.master')

@section('content')

<form method="post" action="{{route('insumos.update', $insumo ->id) }}">
    @csrf
    @method('PUT')
    <div class="container mt-4">
        <div class="card" style="background-color: #343a40; color: aliceblue;">
            <div class="card-header text-center">
                <h2>Editar Insumo</h2>
            </div>
            <div class="card-body">

                <div class="mb-2">
                    <label class="form-label">Fecha Registro</label>
                    <input type="date" class="form-control" name="fecha_registro" value="{{ old('fecha_registro', $insumo->fecha_registro) }}" required>
                </div>
                <div class="form-group">
                    <label for="nombre" style="color:aliceblue;">Nombre</label>
                    <input type="text" name="nombre" value="{{old('nombre',$insumo->nombre)}}" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="marca" style="color:aliceblue;">Marca</label>
                    <input type="text" name="marca" value="{{old('marca',$insumo->marca)}}" id="marca" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tipo" style="color:aliceblue;">Tipo</label>
                    <input type="text" name="tipo" value="{{old('tipo',$insumo->tipo)}}" id="tipo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="valor_unitario" style="color:aliceblue;">Valor Unitario</label>
                    <input type="number" name="valor_unitario" value="{{old('valor_unitario',$insumo->valor_unitario)}}" id="valor_unitario" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cantidad" style="color:aliceblue;">Cantidad</label>
                    <input type="number" name="cantidad" value="{{old('cantidad',$insumo->cantidad)}}" id="cantidad" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="disponible" style="color:aliceblue;">Disponible</label>
                    <input type="number" name="disponible" value="{{old('disponible',$insumo->disponible)}}" id="disponible" class="form-control" required>
                </div>
                <br>

                <button type="submit" class="btn btn-success btn-sm ">Guardar</button>
                <a href="{{route('insumos.index')}}" class="btn btn-danger btn-sm">Cancelar</a>

            </div>
        </div>
    </div>
</form>

@endsection
