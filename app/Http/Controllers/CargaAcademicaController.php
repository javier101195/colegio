<?php

namespace App\Http\Controllers;

use App\Models\CargaAcademica;
use Illuminate\Http\Request;

/**
 * Class CargaAcademicaController
 * @package App\Http\Controllers
 */
class CargaAcademicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /* public function User(){
        return $this->hasMany(User::class,'id');
    }

    public function materia(){
        return $this->hasMany(materia::class,'id');
    } */



    public function index()
    {
        $cargaAcademicas = CargaAcademica::paginate();

        return view('carga-academica.index', compact('cargaAcademicas'))
            ->with('i', (request()->input('page', 1) - 1) * $cargaAcademicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargaAcademica = new CargaAcademica();
        return view('carga-academica.create', compact('cargaAcademica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CargaAcademica::$rules);

        $cargaAcademica = CargaAcademica::create($request->all());

        return redirect()->route('carga-academicas.index')
            ->with('success', 'CargaAcademica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargaAcademica = CargaAcademica::find($id);

        return view('carga-academica.show', compact('cargaAcademica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargaAcademica = CargaAcademica::find($id);

        return view('carga-academica.edit', compact('cargaAcademica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CargaAcademica $cargaAcademica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CargaAcademica $cargaAcademica)
    {
        request()->validate(CargaAcademica::$rules);

        $cargaAcademica->update($request->all());

        return redirect()->route('carga-academicas.index')
            ->with('success', 'CargaAcademica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cargaAcademica = CargaAcademica::find($id)->delete();

        return redirect()->route('carga-academicas.index')
            ->with('success', 'CargaAcademica deleted successfully');
    }
}
