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

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h5>Registro de Cultivos Rentables</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cultivos.store') }}">
                        @csrf

                        <div class="mb-2">
                            <label class="form-label">Fecha de Registro</label>
                            <input type="date" name="fecha" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Nombre del Cultivo</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Tipo del Cultivo</label>
                            <input type="text" name="tipo" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Área del Cultivo</label>
                            <input type="number" name="area" class="form-control form-control-sm" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Presupuesto</label>
                            <input type="number" name="presupuesto" class="form-control form-control-sm" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-sm">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
