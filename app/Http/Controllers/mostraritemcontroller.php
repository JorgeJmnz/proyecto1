<?php

namespace App\Http\Controllers;
use App\Models\Modulo;
use App\Models\Subestacione;
use App\Models\Categoria;

use Illuminate\Http\Request;

class mostraritemcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show($id)
    {
        $modulo = Modulo::find($id);

        return view('mostraritem', compact('modulo'));
    }
}
