<?php

namespace App\Http\Controllers;

use App\Models\AltaBaja;
use App\Models\Categoria;
use Illuminate\Http\Request;

class AltasBajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Altas y Bajas';
        $items = AltaBaja::all();
        return view('modules/altasBajas/index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Registro nuevo';
        $items = Categoria::all();
        return view('modules/altasBajas/create', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new AltaBaja();
        $item-> tipo = $request->tipo;
        $item-> categoria = $request->categoria;
        $item-> costo = $request->costo;
        $item-> descripcion = $request->descripcion;
        $item->save();
        alert()->success('Exito','Registro');
        return redirect()->route('altasBajas');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar";
        $items = AltaBaja::find($id);
        return view("eliminar", compact('items', 'titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar';
        $items = AltaBaja::find($id);
        return view('edit', compact('items', 'titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = AltaBaja::find($id);
        $item ->tipo = $request->tipo;
        $item ->categoria = $request->categoria;
        $item ->cantidad = $request->cantidad;
        $item ->descripcion = $request->descripcion;
        $item ->fecha = $request->fecha;
        $item->save();
        alert()->success('Actualizado','Datos Actualizados');
        return redirect('/index')->with('success', 'Datos ingresados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AltaBaja::find($id);
        alert()->success('Eliminado','Datos eliminados');
        $item->delete();
        return redirect('/index');
    }
}
