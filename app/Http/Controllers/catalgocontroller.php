<?php

namespace App\Http\Controllers;
use App\Models\Modulo;
use App\Models\Subestacione;
use App\Models\Categoria;

use Illuminate\Http\Request;

class catalgocontroller extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
    $this->middleware('can:catalogos.index')->only('index');
    $this->middleware('can:catalogos.edit')->only('edit','update');
    $this->middleware('can:catalogos.create')->only('create','store');
    $this->middleware('can:catalogos.destroy')->only('destroy');
}

    public function index(Request $request)
    {
       // $filtro=$request->get('filtro');

        $buscarpor=$request->get('buscarpor');


        $modulos = Modulo::where('nombre', 'LIKE', '%' .$buscarpor. '%')->paginate();

        return view('catalogo', compact('modulos', 'buscarpor'));
       
    }
}
