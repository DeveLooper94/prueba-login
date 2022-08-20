<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Session;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function welcome(){
        return view('welcome');
    }
    
     public function index()
    {
        //
        //$productos = Producto::whereCategoria_id(Session::get('categoria_id'))->get();
        //return view('producto.index', compact('productos'));
        $datosp = Producto::all(); /*find(1);*/
        return view('productos.index', compact('datosp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.agregar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $productos = new Producto();
        $productos->name = $request->post('name');
        $productos->precio = $request->post('precio');
        $productos->descripcion = $request->post('descripcion');
        $productos->categoria_id = $request->post('categoria_id');
        $productos->save();

        return redirect()->route('productos.index')->with('success', '¡¡Producto agregada con exito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $productos = Producto::find($id);
        return view('productos.eliminar', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = Producto::find($id);
        return view('productos.actualizar', compact('productos'));
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
        //
        $productos = Producto::find($id);
        $productos->name = $request->post('name');
        $productos->precio = $request->post('precio');
        $productos->descripcion = $request->post('descripcion');
        $productos->save();

        return redirect()->route('productos.index')->with('success', '¡¡Producto agregada con exito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $productos = Producto::find($id);
        $productos->delete();

        return redirect()->route('productos.index')->with('success', '¡¡Producto eliminada con exito!!');
    }

    
}
