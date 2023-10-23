<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        //retornamos vista, metodo compact nos permite convertir el reesultado a un array
        return view('almacen.categoria.index', compact('categorias'));
    }
 
}
