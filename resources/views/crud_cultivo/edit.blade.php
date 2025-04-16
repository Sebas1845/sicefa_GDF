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

<div class="modal-dialog mx-auto" style="max-width: 500px;">
    <div class="modal-content shadow-lg rounded">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title">Editar Cultivo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form action="{{ route('cultivos.update', $dato->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="modal-body">
                <input type="hidden" name="id" id="edit-id">
                <div class="mb-2">
                    <label class="form-label">Fecha Cultivada</label>
                    <input type="date" class="form-control" name="fecha" value="{{ old('fecha', $dato->fecha) }}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nombre Cultivo</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $dato->nombre) }}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Tipo Cultivo</label>
                    <input type="text" class="form-control" name="tipo" value="{{ old('tipo', $dato->tipo) }}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Área Cultivada</label>
                    <input type="number" class="form-control" name="area" value="{{ old('area', $dato->area) }}" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Presupuesto Cultivo</label>
                    <input type="text" class="form-control" name="presupuesto" value="{{ old('presupuesto', $dato->presupuesto) }}" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
</div>

@endsection
