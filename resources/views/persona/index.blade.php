@extends('adminlte::page')

@section('content')

    {{-- Cabecera Persona --}}
    <div class="row">
        <h1>Persona <a href={{url('persona/create')}}><button class="btn btn-success">Nuevo</button></a></h1>
    </div>

    {{-- Lista Persona --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Direccion</th>
                    <th class="text-center">Opciones</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $key => $persona)    
                        <tr>
                            <th>{{$key + 1}}</th>
                            <th>{{$persona->nombre}}</th>
                            <th>{{$persona->apellido}}</th>
                            <th>{{$persona->dni}}</th>
                            <th>{{$persona->direccion}}</th>
                            <td >
                                <div class="btn-toolbar justify-content-center">
                                    <a href="{{url('persona/'.$persona->idPersona.'/edit')}}"><button class="btn btn-info" ><i class="fas fa-edit"></i></button></a>
                                    <a href="#">
                                        <form action="{{route('persona.destroy',$persona->idPersona)}}" method="POST">
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