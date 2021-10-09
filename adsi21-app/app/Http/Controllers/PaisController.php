<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;
use App\Imports\PaisesImport;

use Maatwebsite\Excel\Facades\Excel;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // SELECT * FROM PAIS;
        $pais = Pais::query();

        if ($request->ajax()){
            return datatables()
            ->eloquent($pais)
            ->addColumn('action', function ($pais){
                return view('principal.pais.partials.dataAction',compact('pais'));
            })
            ->rawColumns(['action'])
            ->toJson();
        }

        return view('principal.pais.index',compact('pais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('principal.pais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pais = Pais::create($request->all());
        return redirect()->route('principal.pais.index')
        ->with('info','Pais Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pais = Pais::find($id);
        return view('principal.pais.show',compact('pais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pais = Pais::find($id);
        return view('principal.pais.edit',compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pais = Pais::find($id);
        $pais->update($request->all());
        return redirect()->route('principal.pais.index')
        ->with('info','Pais Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();
        return back()->with('info','Pais Eliminado');
    }

    public function importExcel(Request $request){
        Excel::import(new PaisesImport, request()->file('filepais'));
        return back();
    }
}
