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

<br>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h5>Registrar Insumo</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('insumo.store') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Fecha Registro</label>
                            <input type="date" name="fecha_registro" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Marca</label>
                            <input type="text" name="marca" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Tipo</label>
                            <input type="text" name="tipo" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Valor Unitario</label>
                            <input type="number" name="valor_unitario" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Disponibilidad</label>
                            <input type="text" name="disponibilidad" class="form-control form-control-sm" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                            <a href="{{ route('insumo.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection