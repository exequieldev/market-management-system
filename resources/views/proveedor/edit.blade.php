@extends('adminlte::page')

@section('content')

    {{-- Cabecera Proveedores --}}
    <div class="row">
        <h1>Editar Proveedor <a href={{route('proveedor.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Lista Proveedores --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/proveedor/'.$proveedor->idProveedor)}} method="POST" autocomplete="off">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="razonSocial">Razon Social</label>
                    <input type="text" name="razonSocial" value="{{$proveedor->razonSocial}}" class="form-control" placeholder="Ingrese razon social">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection