<?php

namespace App\Http\Controllers;

use App\Models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function store(Request $request){
        Lease::create([
            'nombre_cliente'=>$request->nombre_cliente,
            'apellido_paterno'=>$request->apellido_paterno,
            'apellido_materno'=>$request->apellido_materno,
            'email'=>$request->email,
            'patente'=>$request->patente,
            'fecha_entrega'=>$request->fecha_entrega,
            'fecha_devolucion'=>$request->fecha_devolucion
        ]);
    }
}
