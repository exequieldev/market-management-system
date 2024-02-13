<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\LineaCompra;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $compras = Compra::all();

        return view('compra.index',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $productos = Producto::all();
         $proveedores = Proveedor::all();
         return view('compra.create',compact('productos','proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compra = new Compra;
        $compra->fecha = $request->get('fecha');
        $compra->ifProveedor = $request->get('proveedor');
        $compra->save();


        $lineaCompra = new LineaCompra;
        $lineaCompra->cantidad = $request->get('cantidad');
        $lineaCompra->precioUnitario = $request->get('precioUnitario');
        $lineaCompra->idProducto = $request->get('producto');
        $lineaCompra->idCompra = $compra->idCompra;

        return redirect('compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
         return view('compra.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $compra = Compra::findOrFail($id);

        return view('compra.edit',compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->razonSocial = $request->get('razonSocial');
        $proveedor->update();

        return redirect('proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect('proveedor');
    }
}
