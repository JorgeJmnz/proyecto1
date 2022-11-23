<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Modulo;

use Illuminate\Http\Request;
use PDF;

/**
 * Class InventarioController
 * @package App\Http\Controllers
 */
class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:inventarios.index')->only('index');
        $this->middleware('can:inventarios.edit')->only('edit','update');
        $this->middleware('can:inventarios.create')->only('create','store');
        $this->middleware('can:inventarios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');

        $inventarios = Inventario::where('panel', 'LIKE', '%' .$buscarpor. '%')->paginate();

        return view('inventario.index', compact('inventarios', 'buscarpor'))
            ->with('i', (request()->input('page', 1) - 1) * $inventarios->perPage());
    }

    public function pdf()
    {
        $inventarios=Inventario::paginate();

        $pdf= PDF::loadView('inventario.pdf',['inventarios'=>$inventarios]);
           
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventario = new Inventario();

        $modulos= Modulo::pluck('nombre','id');
        return view('inventario.create', compact('inventario', 'modulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inventario::$rules);

        $inventario = Inventario::create($request->all());

        return redirect()->route('inventarios.index')
            ->with('success', 'Inventario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);

        return view('inventario.show', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario = Inventario::find($id);
        $modulos= Modulo::pluck('nombre','id');

        return view('inventario.edit', compact('inventario','modulos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inventario $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
        request()->validate(Inventario::$rules);

        $inventario->update($request->all());

        return redirect()->route('inventarios.index')
            ->with('success', 'Inventario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id)->delete();

        return redirect()->route('inventarios.index')
            ->with('success', 'Inventario deleted successfully');
    }
}
