@extends('adminlte::page')

@section('content')

    {{-- Cabecera Proveedores --}}
    <div class="row">
        <h1>Proveedor <a href={{url('proveedor/create')}}><button class="btn btn-success">Nuevo</button></a></h1>
    </div>

    {{-- Lista Proveedores --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">Razon Social</th>
                    <th class="text-center">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $key => $proveedor)    
                        <tr>
                            <th>{{$key + 1}}</th>
                            <th>{{$proveedor->razonSocial}}</th>
                            <td >
                                <div class="btn-toolbar justify-content-center">
                                    <a href="{{url('proveedor/'.$proveedor->idProveedor.'/edit')}}"><button class="btn btn-info" ><i class="fas fa-edit"></i></button></a>
                                    <a href="#">
                                        <form action="{{route('proveedor.destroy',$proveedor->idProveedor)}}" method="POST">
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