<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
   
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $clientes=DB::table('cliente')->select('id','nombre','apellido','documento','direccion','telefono','email')
        ->where('apellido','LIKE','%'.$texto.'%')
        ->orWhere('documento','LIKE','%'.$texto.'%')
        ->orWhere('nombre','LIKE','%'.$texto.'%')
        ->orderBy('apellido','asc')
        ->paginate(5);
        return view('cliente.index',compact('clientes','texto'));
    }

      public function create()
    {
        return view('cliente.create');
    }

    
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre=$request->input('nombre');
        $cliente->apellido=$request->input('apellido');
        $cliente->documento=$request->input('documento');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->email=$request->input('email');

        $cliente->save();
        return redirect()->route('cliente.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        //return $cliente; devuelve un Json con los datos del cliente seleccionado
        return view('cliente.edit',compact('cliente'));
    }

    
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido= $request->input('apellido');
        $cliente->documento= $request->input('documento');
        $cliente->direccion= $request->input('direccion');
        $cliente->telefono= $request->input('telefono');
        $cliente->email= $request->input('email');
        $cliente->save();

        return redirect()->route('cliente.index');
    }

   
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
