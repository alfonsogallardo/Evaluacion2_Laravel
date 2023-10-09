<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehicle;
class NewController extends Controller
{
    public function index(){
        return view('new');
    }

    public function showNewArriendoForm(){
        $vehicles = Vehicle::all(); // Obtener la lista de vehículos
        return view('new', compact('vehicles')); // Pasar la lista de vehículos a la vista
}}

