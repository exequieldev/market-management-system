@extends('adminlte::page')

@section('content')

    {{-- Cabecera Compra --}}
    <div class="row">
        <h1>Compras <a href={{url('compra/create')}}><button class="btn btn-success">Nuevo</button></a></h1>
    </div>

    {{-- Lista Compra --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Proveedor</th>
                    <th class="text-center">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($compras as $key => $compra)    
                        <tr>
                            <th>{{$key + 1}}</th>
                            <th>{{$compra->fecha}}</th>
                            <th>{{$compra->proveedor->nombre}}</th>
                            <td >
                                <div class="btn-toolbar justify-content-center">
                                    <a href="{{url('compra/'.$compra->idCompra.'/edit')}}"><button class="btn btn-info" ><i class="fas fa-edit"></i></button></a>
                                    <a href="#">
                                        <form action="{{route('compra.destroy',$compra->idCompra)}}" method="POST">
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