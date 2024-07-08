<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    public function store(Request $resquest){

        $Producto = new productos();
        $Producto->producto = $resquest->producto;
        $Producto->precio = $resquest->precio;
        $Producto->cantidad = $resquest->cantidad;
        $Producto->save();

    }
    public function productos(){
        return view('Productos.producto');
    }
}
