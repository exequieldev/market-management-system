@extends('adminlte::page')

@section('content')

    {{-- Cabecera MedioPago --}}
    <div class="row">
        <h1>Editar Medio Pago <a href={{route('mediopago.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Lista MedioPago --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/mediopago/'.$mediopago->idMedioPago)}} method="POST" autocomplete="off">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{$mediopago->nombre}}" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" value="{{$mediopago->descripcion}}" class="form-control" placeholder="Ingrese descripcion">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection