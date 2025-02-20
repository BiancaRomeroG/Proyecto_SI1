@extends('layouts.home_plantilla')
@section('css')
<style>
    @media(max-width: 850px){
        section div.col-9{
            width: 100%;
        }
    }

    @media(max-width: 600px){
       .card.shadow.m-5{
           margin: 3rem 0 0 0 !important;
       }
    }

</style>
    
@endsection
@section('navigation')
<section class="row justify-content-center" id="main">
    <div class="col-9">
        <div class="card shadow mt-1">
            <div class="card-header">
                <h5 class="m-2">Datos Personales a editar</h5>
            </div>
            <div class="card-body p-4">
                <form method="POST" id='register_form' action="{{$actionform}}"> 
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 justify-content-around"> 
                        <div class="col m-2"> 
                            <label for="nombre">
                                Nombre<br>
                            </label>
                            <input class="form-control" id="nombre" type="text" name="nombre" value="{{$persona->nombre}}">
                            {!! $errors->first('nombre', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                        <div class="col m-2">
                            <label for="apellidoPat">
                                Apellido paterno<br>
                            </label>
                            <input class="form-control" id="apellidoPat" type="text" name="apellido_pat" value = "{{$persona->apellido_pat}}">
                            {!! $errors->first('apellido_pat', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="apellidoMat">
                                Apellido materno<br>
                            </label>
                            <input class="form-control" id="apellidoMat" type="text" name="apellido_mat" value="{{$persona->apellido_mat}}">
                            {!! $errors->first('apellido_mat', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="ci">
                                Cédula de identidad<br>
                            </label>
                            <input class="form-control" id="ci" type="number" name="ci" value="{{$persona->ci}}">
                        </div>
                        <div class="col m-2">
                            <label for="email">
                                Email<br>
                            </label>
                            <input class="form-control" id="email" type="email" name="email" value= "{{$persona->email}}">
                            {!! $errors->first('email', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label for="fechaNac">
                                Fecha de nacimiento<br>
                            </label>
                            <input class="form-control" id="fechaNac" type="date" name="fecha_nac" value= "{{$persona->fecha_nac}}">
                            {!! $errors->first('fecha_nac', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                        <div class="col m-2">
                            <p class="mb-1">
                                Género
                            </p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="hombre" type="radio" name="sexo" value="M"
                                @if ($persona->sexo === 'M')
                                    checked
                                @endif
                                >
                                <label for="hombre">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="mujer" type="radio" name="sexo" value="F"
                                @if ($persona->sexo === 'F')
                                    checked
                                @endif
                                >
                                <label for="mujer">Mujer</label>
                            </div>
                            {!! $errors->first('sexo', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-around">
                        <div class="col m-2">
                            <label>
                                Dirección<br>
                            </label>
                            <input class="form-control" type="text" name="direccion" value="{{$persona->direccion}}">
                            {!! $errors->first('direccion', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                        <div class="col m-2">
                            <label>
                                Telefono<br>
                            </label>
                            <input class="form-control" type="tel" name="telefono" value="{{$persona->telefono}}">
                            {!! $errors->first('telefono', '<span class="help-block text-danger">*:message</span>') !!}
                        </div>
                    </div>
                    <section class="row justify-content-center" id="main">
                        <div class="col-12">
                            <div class="card shadow m-5">
                                <div class="card-header">
                                    <h5 class="m-2"> Información adicional</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="row mb-3 justify-content-around">
                                        <div class="col m-2">
                                            <label>
                                                Parentesco<br>
                                            </label>
                                            <input class="form-control" type="text" name="parentesco" value="{{$tutor->parentesco}}">
                                            {!! $errors->first('parentesco', '<span class="help-block text-danger">*:message</span>') !!}
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-end me-2">

                                <a class="btn btn-danger" href="{{route('apoderado.index')}}">Cancelar</a>

                                <button type="submit" onclick="sendForm()" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                        
                    </section>
                    
                </form>
            </div>
        </div>
    </div>
    
    </section>
    </div>
    <script>
        function sendForm() {
            document.all['register_form'].submit();
        }
    </script>
@endsection