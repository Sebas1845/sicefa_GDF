@extends('layouts.master')

@section('content')

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Acceso Denegado',
        text: "{{ session('error') }}",
        confirmButtonText: 'Entendido'
    });
</script>
</div>
@endif

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm border">
                <div class="card-header text-center">
                    <h5>Lista de Cultivos Rentables</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Puedes agregar contenido adicional aquí si es necesario -->
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-sm table-bordered text-center align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Cultivo</th>
                                <th>Nombre Cultivo</th>
                                <th>Tipo Cultivo</th>
                                <th>Área Cultivo</th>
                                <th>Presupuesto</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $dato)
                            <tr>
                                <td class="align-middle">{{ $dato->id }}</td>
                                <td class="align-middle">{{ $dato->fecha }}</td>
                                <td class="align-middle">{{ $dato->nombre }}</td>
                                <td class="align-middle">{{ $dato->tipo }}</td>
                                <td class="align-middle">{{ $dato->area }}</td>
                                <td class="align-middle">{{ $dato->presupuesto }}</td>
                                <td class="align-middle"><a href="{{route('cultivos.edit', $dato ->id )}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td class="align-middle"><a href="{{route('cultivos.destroy', $dato->id )}}" class="btn btn-danger btn-sm">Eliminar</a></td>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Aquí puedes agregar un modal para edición si es necesario -->

            </div>
        </div>
    </div>
</div>

@endsection
