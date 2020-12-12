<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Carbon\Carbon;
class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::all();
        return response()->json($categoria, 201);
    }
    public function store(Request $request){
        $categoria = new Categoria;
        $categoria->estado = $request->estado;
        $categoria->nombre = $request->nombre;
        $categoria->creado_a= Carbon::now();
        $categoria->actualizado_a =Carbon::now();
        $categoria->save();
    }
    
}
