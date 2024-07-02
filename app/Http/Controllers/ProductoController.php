<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        
        return view('welcome');
    }
    public function store(Request $request){
        $producto = new Producto();
        $producto->producto = $request->Producto;
        $producto->precio = $request->Precio;
        $producto->cantidad = $request->Cantidad;
        $producto->save();

    }
}
