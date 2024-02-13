@extends('adminlte::page')

@section('content')

    {{-- Cabecera Compra --}}
    <div class="row">
        <h1>Nuevo Compra <a href={{route('compra.index')}}><button class="btn btn-success">Volver</button></a></h1>
    </div>

    {{-- Lista Compra --}}
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action={{url('/compra')}} method="POST" autocomplete="off">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" value="{{old('fecha')}}" class="form-control" placeholder="Ingrese stockMinimo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="proveedor">Proveedor</label>
                            <select name="proveedor" class="form-control">
                                <option>Seleccionar...</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{$proveedor->idProveedor}}">{{$proveedor->razonSocial}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="producto">Producto</label>
                            <select name="producto" id="producto" class="form-control">
                                <option>Seleccionar...</option>
                                @foreach ($productos as $producto)
                                    <option value="{{$producto->idProducto}}">{{$producto->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="{{old('cantidad')}}" class="form-control" placeholder="Ingrese stockMinimo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="precio">Precio Unitario</label>
                            <input type="text" name="precio" id="precio" value="{{old('precio')}}" class="form-control" placeholder="Ingrese stockMinimo">
                        </div>
                    </div>
                </div>
                
                
                

                <div class="form-group">
                    <button class=" btn btn-primary" type="button" onclick="agregarProducto()">Agregar</button>
                </div>

                <table class="table">
                    <thead>
                        <tr class="text-center">
                          {{-- <th>#</th> --}}
                          <th scope="col">Producto</th>
                          <th scope="col">Cantidad</th>
                          <th class="text-center">Precio Unitario</th>
                          <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tablebody">
                        
                    </tbody>
                </table>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

<script>
        cantidadProducto = 1;

        function agregarProducto(){
                inputProducto    = document.getElementById('producto');
                valueProducto    = inputProducto.value
                textProducto     = inputProducto.options[inputProducto.selectedIndex].text;


                cantidad    = document.getElementById('cantidad').value;
                precio      = document.getElementById("precio").value;
               
                var producto = '<tr class="text-center"  id="producto'+cantidadProducto+'">';

                // producto = producto + '<td ><input type="hidden">'+cantidadProducto+'</td>';
                producto = producto + '<td><input type="hidden" name="producto[]" value="'+valueProducto+'"><span>'+textProducto+'</span></td>';
                producto = producto + '<td><input type="hidden" name="cantidad[]" value="'+cantidad+'"><span>'+cantidad+'</span></td>';
                producto = producto + '<td><input type="hidden" name="precio[]" value="'+precio+'"><span>'+precio+'</span></td>';

                producto = producto + '<td><div class="text-center">'
                producto = producto + '<button class="btn btn-danger" onClick="eliminarProducto('+cantidadProducto+')"><i class="fas fa-trash"></i></button>'
                producto = producto + '<button class="btn btn-success"><i class="fas fa-edit"></i></button>'
                producto = producto + '<button class="btn btn-primary" onClick="sumarProducto('+cantidadProducto+'),event.preventDefault()"><i class="fas fa-plus"></i></button>'
                producto = producto + '<button class="btn btn-warning" onClick="restarProducto('+cantidadProducto+'),event.preventDefault()"><i class="fas fa-minus"></i></button>'
                producto = producto + '</div>'
                producto = producto + '</td>'

                producto = producto + '</tr>'
                
                cantidadProducto = cantidadProducto+1; 
                $("#tablebody").append(producto);
                limpiarProducto();

        }

        function eliminarProducto(registro){
            $("#producto"+registro).remove();
            cantidadProducto = cantidadProducto-1;
        }

        function sumarProducto(registro){
            
            var fila                = document.getElementById("producto"+registro);
            var celdas              = fila.getElementsByTagName("td");
            var inputCantidad       = celdas[1].querySelector("input")
            var spanCantidad        = celdas[1].querySelector("span")
            var calcularCantidad    = parseInt(spanCantidad.innerHTML, 10) + 1
            spanCantidad.innerHTML  = calcularCantidad;
            inputCantidad.value     = calcularCantidad;
        }

        function restarProducto(registro){
            
            var fila                = document.getElementById("producto"+registro);
            var celdas              = fila.getElementsByTagName("td");
            var inputCantidad       = celdas[1].querySelector("input")
            var spanCantidad        = celdas[1].querySelector("span")
            var calcularCantidad    = parseInt(spanCantidad.innerHTML, 10) - 1
            spanCantidad.innerHTML  = calcularCantidad;
            inputCantidad.value     = calcularCantidad;
              
        }

        function actualizarProducto{
        }

        function limpiarProducto(){
            document.getElementById("producto").selectedIndex = 0;
            document.getElementById("cantidad").value = "";
            document.getElementById("precio").value = "";
        }

</script>

@endsection

