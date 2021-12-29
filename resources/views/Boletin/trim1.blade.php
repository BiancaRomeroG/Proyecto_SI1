@extends('layouts.home_plantilla')

@section('title', 'Vista de Boletin')

@section('navigation')
<div class="row justify-content-center">
    <div class="col-9 mt-5">
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h2>Boletin del alumno</h2>
            </div>
        </div>
        <div class="row mb-3 justify-content-around">
            <div class="col m-2">
                <div class="card-body">
                    <div class="row justify-content-around">
                        <div class="col m-2">
                            <p class="mb-1 "><span class="fw-bold text-secondary">Alumno: </span> {{$persona->nombre}}
                                {{$persona->apellido_pat}} {{$persona->apellido_mat}}</p>
                            <p class="mb-1"><b class="fw-bold  text-secondary">CI: </b> {{$persona->ci}}</p>
                            <p class="mb-1"><b class="fw-bold  text-secondary">Apoderado: </b>
                                {{$personaTutor->nombre.' '.$personaTutor->apellido_pat.' '.$personaTutor->apellido_mat}}
                            </p>
                        </div>
                        <div class="col m-2">
                            <p class="mb-1"><b class="fw-bold text-secondary">Curso: </b> {{$cardex->id_curso}}°
                                Secundaria</p>
                            <p class="mb-1"><b class="fw-bold text-secondary">Código Rude: </b> {{$alumno->cod_rude}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mb-2">
            <div class="col">
                <h3 class="">Notas del primer trimestre</h3>
            </div>
        </div>
        @if (count($trimestre1) <= 0) <div class="alert alert-info">
            <p>No hay notas ingresadas del primer trimestre</p>
    </div>
    @else

    <!--Tabla del 1er trimestre-->
    <table class="table table-bordered ">
        <thead class="table-secondary">
            <tr>
                <th>Asignatura</th>
                <th>Ser</th>
                <th>Saber</th>
                <th>Hacer</th>
                <th>Decidir</th>
                <th>Nota Trimestral</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trimestre1 as $trimestre)
            <tr>
                <td class="text-start">{{ $trimestre->nombre }}</td>
                <td>{{ $trimestre->ser }}</td>
                <td>{{ $trimestre->saber }}</td>
                <td>{{ $trimestre->hacer }}</td>
                <td>{{ $trimestre->decidir }}</td>
                <td>{{ $trimestre->nota_trimestral }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
<div class="text-center" style="margin-bottom: 2rem">
    @if (count($trimestre1) > 0)
    <a href="{{ route('boletinTrim1', $cardex->id) }}" type="button" class="btn btn-success">Imprimir</a>
    @endif
</div>
@endsection