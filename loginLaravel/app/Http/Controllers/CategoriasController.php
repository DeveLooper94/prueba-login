<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Session;

class CategoriasController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosc = Categoria::all(); /*find(1);*/
        return view('categorias.index', compact('datosc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.agregar');
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
        $categorias = new Categoria();
        $categorias->name = $request->post('name');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();

        return redirect()->route('categorias.index')->with('success', '¡¡Categoria agregada con exito!!');
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
        $categorias = Categoria::find($id);
        return view('categorias.eliminar', compact('categorias'));
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
        $categorias = Categoria::find($id);
        return view('categorias.actualizar', compact('categorias'));
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
        $categorias = Categoria::find($id);
        
        $categorias->name = $request->post('name');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();

        return redirect()->route('categorias.index')->with('success', '¡¡Categoria actualizada con exito!!');
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
        $categorias = Categoria::find($id);
        $categorias->delete();

        return redirect()->route('categorias.index')->with('success', '¡¡Categoria eliminada con exito!!');
    }
}
