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

<div class="container mt-4">
    <h1 class="mb-4">HERRAMIENTAS</h1>
    <a href="{{route('herramientas.create')}}" class="btn btn-secondary mb-3">Añadir Nueva Herramienta</a>
    <a href="{{route('home')}}" class="btn btn-danger mb-3">Regresar</a>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($herramientas as $herramienta)
                <tr>
                    <td>{{ $herramienta ->id }}</td>
                    <td>{{ $herramienta ->tipo }}</td>
                    <td>{{ $herramienta ->nombre }}</td>
                    <td>{{ $herramienta ->cantidad }}</td>
                    <td>{{ $herramienta ->costo }}</td>
                    <td class="border px-4 py-2 text-center">
                        <div class="flex justify-center">
                            <a href="{{route('herramientas.edit', $herramienta ->id )}}" class="btn btn-success btn-sm">Editar</a>
                            <a href="{{route('herramientas.destroy',  $herramienta ->id )}}" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection
