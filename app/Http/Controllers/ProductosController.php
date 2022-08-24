<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Archivos;
use App\Models\Unidades;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::all();
        /* dd($productos[count($productos)-1]->archivo); */

        return view('producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades= Unidades::all();
        $categorias = Categoria::all();

        return view('producto.create',compact('unidades','categorias'));
    }

 
    public function store(Request $request)
    {
        //dd($request);
        
        $producto =  new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->categoria_id= $request->categoria;
        $producto->unidad_id= $request->unidad;
        
        $imagen= new Archivos();

        if ($request->hasFile('file')) {          

            $file = $request->file('file');
            $destinationPath = 'img/productos/';
            $filename = time() . `-` . $file->getClientOriginalName();
            $uploadSucces = $request->file('file')->move($destinationPath, $filename);
            $imagen->ruta_imagen= $destinationPath . $filename;
            $imagen->save();
            $producto->archivo_id = $imagen->id;

        }
        $producto->save();
        
        $productos= Producto::all();
        return view('producto.index',compact('productos'));
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
