<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Dpto;
use Illuminate\Http\Request;

class DptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dptos = Dpto::select([
            'dptos.id as id',
            'dptos.nombre as nombre',
            'pais.nombre as pnombre'
        ])
        ->join('pais','dptos.pais_id','=','pais.id');

        if ($request->ajax()){
            return datatables()
            ->eloquent($dptos)
            ->addColumn('action', function ($dptos){
                return view('principal.dptos.partials.dataAction',compact('dptos'));
            })
            ->rawColumns(['action'])
            ->toJson();
        }

        return view('principal.dptos.index',compact('dptos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pais = Pais::pluck('nombre','id');
        return view('principal.dptos.create',compact('pais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dptos = Dpto::create($request->all());
        return redirect()->route('principal.dptos.index')
        ->with('info','Departamento Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dpto  $dpto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dpto = Dpto::find($id);
        return view('principal.dptos.show',compact('dpto')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dpto  $dpto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dpto = Dpto::find($id);
        $pais = Pais::pluck('nombre','id');
        return view('principal.dptos.edit',compact('dpto','pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dpto  $dpto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dpto = Dpto::find($id);
        $dpto->update($request->all());
        return redirect()->route('principal.dptos.index')
        ->with('info','Departamento Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dpto  $dpto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dpto = Dpto::find($id);
        $dpto->delete();
        return back()->with('info','Departamento Eliminado');
    }
}
