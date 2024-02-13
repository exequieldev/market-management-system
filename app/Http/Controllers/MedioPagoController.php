<?php

namespace App\Http\Controllers;

use App\Models\MedioPago;
use Illuminate\Http\Request;

class MedioPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mediopagos = MedioPago::all();

        return view('mediopago.index',compact('mediopagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('mediopago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mediopagos = new MedioPago();
        $mediopagos->nombre = $request->get('nombre');
        $mediopagos->descripcion = $request->get('descripcion');
        $mediopagos->save();

        return redirect('mediopago');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function show(MedioPago $medioPago)
    {
         return view('mediopago.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $mediopago = MedioPago::findOrFail($id);

        return view('mediopago.edit',compact('mediopago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $mediopago = MedioPago::findOrFail($id);
        $mediopago->nombre = $request->get('nombre');
        $mediopago->descripcion = $request->get('descripcion');
        $mediopago->update();

        return redirect('mediopago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedioPago  $medioPago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mediopago = MedioPago::findOrFail($id);
        $mediopago->delete();

        return redirect('mediopago');
    }
}
