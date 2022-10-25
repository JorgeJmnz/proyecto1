<?php

namespace App\Http\Controllers;
use App\Models\Modulo;
use App\Models\Subestacione;
use App\Models\Categoria;

use Illuminate\Http\Request;

class catalgocontroller extends Controller
{
    public function index(Request $request)
    {
       // $filtro=$request->get('filtro');

        $buscarpor=$request->get('buscarpor');


        $modulos = Modulo::where('nombre', 'LIKE', '%' .$buscarpor. '%')->paginate();

        return view('catalogo', compact('modulos', 'buscarpor'));
       
    }
}
