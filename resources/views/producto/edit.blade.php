@extends('adminlte::page')

@section('content')

    {{-- Cabecera Productos --}}
    <div class="row">
        <h1>Editar Producto <a href={{route('producto.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Formulario Productos --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/producto/'.$producto->idProducto)}} method="POST" autocomplete="off">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control" placeholder="Ingrese nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">descripcion</label>
                    <input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control" placeholder="Ingrese descripcion">
                </div>
                <div class="form-group">
                    <label for="stockMinimo">Stock Minimo</label>
                    <input type="text" name="stockMinimo" value="{{$producto->stockMinimo}}" class="form-control" placeholder="Ingrese stockMinimo">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                        <option value="{{$producto->categoria->idCategoria}}">{{$producto->categoria->nombre}}</option>
                        @foreach ($categorias as $categoria)
                            @if ($categoria->idCategoria != $producto->categoria->idCategoria)
                                <option value="{{$categoria->idCategoria}}">{{$categoria->nombre}}</option>
                            @endif
                            
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