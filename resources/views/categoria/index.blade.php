@extends('adminlte::page')

@section('content')

    {{-- Cabecera Proveedores --}}
    <div class="row">
        <h1>Categorias <a href={{url('categoria/create')}}><button class="btn btn-success">Nuevo</button></a></h1>
    </div>

    {{-- Lista Proveedores --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th class="text-center">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $key => $categoria)    
                        <tr>
                            <th>{{$key + 1}}</th>
                            <th>{{$categoria->nombre}}</th>
                            <th>{{$categoria->descripcion}}</th>
                            <td >
                                <div class="btn-toolbar justify-content-center">
                                    <a href="{{url('categoria/'.$categoria->idCategoria.'/edit')}}"><button class="btn btn-info" ><i class="fas fa-edit"></i></button></a>
                                    <a href="#">
                                        <form action="{{route('categoria.destroy',$categoria->idCategoria)}}" method="POST">
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