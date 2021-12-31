@extends('layouts.home_plantilla')

@section('title', 'Cursos')

@section('navigation')

    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <div class="row justify-content-between mb-2">
                <div class="col">
                    <h2>Cursos de la gestion {{ $gestion }}</h2>
                </div>
                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                    <div class="col text-end">
                        <a class="btn btn-sm btn-success" href="{{ route('curso.create') }}"> Registrar nuevo</a>
                    </div>
                @endif
            </div>
            <table class="table table-bordered">
                <thead class="table-secondary">
                    <tr>
                        <th>Curso</th>
                        @if ($gestion === Date('Y'))
                            <th> Cupo maximo </th>
                        @endif
                        <th>Cantidad de alumnos</th>
                        <th width="120px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->nivel }}</td>
                            @if ($gestion === Date('Y'))
                                <td> {{ $curso->cupo_max }} </td>
                            @endif
                            <td>{{ $curso->cant_alumnos }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('curso.show', $curso->id) }}">Ver</a>
                                @if (Auth::user()->id_rol == 1 || Auth::user()->id_rol == 2)
                                    @if ($gestion === Date('Y'))
                                        <a class="btn btn-sm btn-secondary"
                                            href="{{ route('curso.edit', $curso->id) }}">Editar</a>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection
