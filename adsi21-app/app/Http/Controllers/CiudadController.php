<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Dpto;
use Illuminate\Http\Request;
use App\Exports\CiudadsExport;
use App\Imports\CiudadsImport;

use Maatwebsite\Excel\Facades\Excel;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ciudads = Ciudad::select([
            'ciudads.id as id',
            'ciudads.nombre as nombre',
            'dptos.nombre as dnombre'
        ])
        ->join('dptos','ciudads.dpto_id','=','dptos.id');

        if ($request->ajax()){
            return datatables()
            ->eloquent($ciudads)
            ->addColumn('action', function ($ciudads){
                return view('principal.ciudads.partials.dataAction',compact('ciudads'));
            })
            ->rawColumns(['action'])
            ->toJson();
        }

        return view('principal.ciudads.index',compact('ciudads'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dptos = Dpto::pluck('nombre','id');
        return view('principal.ciudads.create',compact('dptos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudads = Ciudad::create($request->all());
        return redirect()->route('principal.ciudads.index')
        ->with('info','Ciudad Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudad)
    {
        $ciudad = Ciudad::find($id);
        return view('principal.ciudads.show',compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciudad = Ciudad::find($id);
        $dptos = Dpto::pluck('nombre','id');
        return view('principal.ciudads.edit',compact('ciudad','dptos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ciudad = Cuidad::find($id);
        $ciudad->update($request->all());
        return redirect()->route('principal.ciudads.index')
        ->with('info','Ciudad Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return back()->with('info','Ciudad Eliminado');
    }

    public function exportExcel()
    {
        return new CiudadsExport();
    }

    public function importExcel(Request $request){
        Excel::import(new CiudadsImport, request()->file('fileciudad'));
        return back();
    }
}
