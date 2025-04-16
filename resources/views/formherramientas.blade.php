@extends('layouts.master')

@section('content')

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Registro Exitoso',
        text: "{{ session('success') }}",
        confirmButtonText: 'Entendido'
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Acceso Denegado',
        text: "{{ session('error') }}",
        confirmButtonText: 'Entendido'
    });
</script>
@endif

<form action="{{route('herramientas.store')}}" method="POST">
    @csrf
    <div class="container mt-4">
        <h2>Registrar una Nueva Herramienta</h2>
            <div class="form-group">
                <label for="fecha_registro">Fecha Registro</label>
                <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" id="tipo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="valor_unitario" >Valor Unitario</label>
                <input type="number" name="valor_unitario" id="valor_unitario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cantidad" >Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="estado" >Estado</label>
                <input type="number" name="estado" id="estado" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="disponibilidad" >Disponiblidad</label>
                <input type="number" name="disponibilidad" id="disponibilidad" class="form-control" required>
            </div>
            <br>

            <button type="submit" class="btn btn-success btn-sm ">Guardar</button>
            <a href="{{route('insumos.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
    </div>
</form>

@endsection
