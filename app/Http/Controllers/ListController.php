<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lease;

class ListController extends Controller
{
    public function index(){
        $leases = Lease::all();
        return view('list', compact('leases'));
    }
    public function softDelete($id){
        Lease::destroy($id);
        return redirect()->route('list');
    }
}
