<?php

namespace App\Http\Controllers;

use App\Models\Lectura;
use Illuminate\Http\Request;

class LecturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['lecturas']=Lectura::paginate(10);
        return view('layouts.tableDatos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.datoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        //return response()->json($datosEmpleado);
        Lectura::insert($datos);
        return redirect('/home/datos')->with('mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lectura $lectura)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lectura = Lectura::findOrFail($id);
        return view('layouts.edit', compact('lectura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except('_token','_method','lecturas.updated_at');

        Lectura::where('id','=',$id)->update($datos);
        $lectura = Lectura::findOrFail($id);
        return view('layouts.edit', compact('lectura'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Lectura::destroy($id);
        return redirect('/home/datos')->with('mensaje','Dato borrado');
    }
}
