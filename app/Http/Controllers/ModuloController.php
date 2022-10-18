<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use App\Models\Subestacione;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class ModuloController
 * @package App\Http\Controllers
 */
class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::paginate();

        return view('modulo.index', compact('modulos'))
            ->with('i', (request()->input('page', 1) - 1) * $modulos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modulo = new Modulo();
        $categorias= Categoria::pluck ('nombre', 'id');
        $subestaciones= Subestacione::pluck('nombre', 'id');
        return view('modulo.create', compact('modulo', 'categorias', 'subestaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Modulo::$rules);

        $modulo = Modulo::create($request->all());

        return redirect()->route('modulos.index')
            ->with('success', 'Modulo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modulo = Modulo::find($id);

        return view('modulo.show', compact('modulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modulo = Modulo::find($id);
        $categorias= Categoria::pluck ('nombre', 'id');
        $subestaciones= Subestacione::pluck('nombre', 'id');

        return view('modulo.edit', compact('modulo', 'categorias', 'subestaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modulo $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulo $modulo)
    {
        request()->validate(Modulo::$rules);

        $modulo->update($request->all());

        return redirect()->route('modulos.index')
            ->with('success', 'Modulo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modulo = Modulo::find($id)->delete();

        return redirect()->route('modulos.index')
            ->with('success', 'Modulo deleted successfully');
    }
}
