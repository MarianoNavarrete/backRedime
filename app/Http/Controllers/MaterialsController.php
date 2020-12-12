<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materiale;
use Carbon\Carbon;
class MaterialsController extends Controller
{
    public function index()
    {
        $materials = Materiale::all();
        return response()->json($materials, 201);
    }
    public function store(Request $request){
        $material = new Materiale;
        $material->estado = $request->estado;
        $material->nombre = $request->nombre;
        $material->descripcion = $request->descripcion;
        $material->stock_minimo= $request->stock_minimo;
        $material->categoria_id= $request->categoria_id;
        $material->creado_a= Carbon::now();
        $material->actualizado_a =Carbon::now();
        $material->save();
    }

    public function update(Request $request)
    {
        $material = Materiale::findOrFail($request->id);

        $material->estado = $request->estado;
        $material->nombre = $request->nombre;
        $material->descripcion = $request->descripcion;
        $material->stock_minimo= $request->stock_minimo;
        $material->categoria_id= $request->categoria_id;
        $material->creado_a= $request->creado_a;
        $material->actualizado_a =Carbon::now();
        $material->save(); 
        
    }
    public function destroy(Request $request)
    {
        $material = Materiale::destroy($request->id);
        return $material;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }

}
