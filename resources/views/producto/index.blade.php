@extends('adminlte::page')

@section('content')

    {{-- Cabecera Producto --}}
    <div class="row">
        <h1>Producto <a href={{url('producto/create')}}><button class="btn btn-success">Nuevo</button></a></h1>
    </div>

    {{-- Lista Producto --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">StockMinimo</th>
                    <th scope="col">Categoria</th>
                    <th class="text-center">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $key => $producto)    
                        <tr>
                            <th>{{$key + 1}}</th>
                            <th>{{$producto->nombre}}</th>
                            <th>{{$producto->descripcion}}</th>
                            <th>{{$producto->stockMinimo}}</th> 
                            <th>{{$producto->categoria->nombre}}</th>
                            <td >
                                <div class="btn-toolbar justify-content-center">
                                    <a href="{{url('producto/'.$producto->idProducto.'/edit')}}"><button class="btn btn-info" ><i class="fas fa-edit"></i></button></a>
                                    <a href="#">
                                        <form action="{{route('producto.destroy',$producto->idProducto)}}" method="POST">
                                          @csrf
                                          @method('delete')
                                          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </a>
                                </div>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

@endsection