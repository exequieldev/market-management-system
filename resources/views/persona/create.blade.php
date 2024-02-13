@extends('adminlte::page')

@section('content')

    {{-- Cabecera Persona --}}
    <div class="row">
        <h1>Nuevo Persona <a href={{route('persona.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Lista Persona --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/persona')}} method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Ingrese nombre de la persona">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" value="{{old('apellido')}}" class="form-control" placeholder="Ingrese apellido de la persona">
                </div>
                <div class="form-group">
                    <label for="dni">Dni</label>
                    <input type="text" name="dni" value="{{old('dni')}}" class="form-control" placeholder="Ingrese dni de la persona">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Ingrese la direccion de la persona">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection