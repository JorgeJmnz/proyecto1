<?php

namespace App\Http\Controllers;

use App\Models\Subestacione;
use Illuminate\Http\Request;

/**
 * Class SubestacioneController
 * @package App\Http\Controllers
 */
class SubestacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subestaciones = Subestacione::paginate();

        return view('subestacione.index', compact('subestaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $subestaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subestacione = new Subestacione();
        return view('subestacione.create', compact('subestacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subestacione::$rules);

        $subestacione = Subestacione::create($request->all());

        return redirect()->route('subestaciones.index')
            ->with('success', 'Subestacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subestacione = Subestacione::find($id);

        return view('subestacione.show', compact('subestacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subestacione = Subestacione::find($id);

        return view('subestacione.edit', compact('subestacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subestacione $subestacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subestacione $subestacione)
    {
        request()->validate(Subestacione::$rules);

        $subestacione->update($request->all());

        return redirect()->route('subestaciones.index')
            ->with('success', 'Subestacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subestacione = Subestacione::find($id)->delete();

        return redirect()->route('subestaciones.index')
            ->with('success', 'Subestacione deleted successfully');
    }
}
