@extends('adminlte::page')

@section('content')

    {{-- Cabecera Producto --}}
    <div class="row">
        <h1>Nuevo Producto <a href={{route('producto.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Formulario Producto --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/producto')}} method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Ingrese descripcion">
                </div>
                <div class="form-group">
                    <label for="stockMinimo">Stock Minimo</label>
                    <input type="text" name="stockMinimo" value="{{old('stockMinimo')}}" class="form-control" placeholder="Ingrese stockMinimo">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                        <option>Seleccionar...</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->idCategoria}}">{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection