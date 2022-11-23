<?php

namespace App\Http\Controllers;
use App\Models\Modulo;
use Illuminate\Http\Request;

class mostraritem extends Controller
{
    public function show($id)
    {
        $modulo = Modulo::find($id);

        return view('mostraritem', compact('modulo'));
    }
}
