@extends('adminlte::page')

@section('content')

    {{-- Cabecera Persona --}}
    <div class="row">
        <h1>Editar Persona <a href={{route('persona.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Lista Persona --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/persona/'.$persona->idPersona)}} method="POST" autocomplete="off">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{$persona->nombre}}" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">apellido</label>
                    <input type="text" name="apellido" value="{{$persona->apellido}}" class="form-control" placeholder="Ingrese apellido">
                </div>
                <div class="form-group">
                    <label for="dni">dni</label>
                    <input type="text" name="dni" value="{{$persona->dni}}" class="form-control" placeholder="Ingrese dni">
                </div>
                <div class="form-group">
                    <label for="direccion">direccion</label>
                    <input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control" placeholder="Ingrese direccion">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection