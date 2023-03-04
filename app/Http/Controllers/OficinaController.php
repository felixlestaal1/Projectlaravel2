<?php

namespace App\Http\Controllers;
use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficina = Oficina::all();
        return view('oficina.index')->with('oficina',$oficina);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oficina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oficina = new Oficina();
        $oficina->Direccion=$request->get('Direccion');
        $oficina->Localidad=$request->get('Localidad');
        $oficina->Provincia=$request->get('Provincia');
        $oficina->save();
        return redirect('/oficina');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oficina = Oficina::find($id);
        return view('oficina.edit')->with('oficina',$oficina);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oficina = Oficina::find($id);
        $oficina->Direccion=$request->get('Direccion');
        $oficina->Localidad=$request->get('Localidad');
        $oficina->Provincia=$request->get('Provincia');
        $oficina->save();
        return redirect('/oficina');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oficina = Oficina::find($id);
        $oficina->delete();
        return redirect('/oficina');
    }
}
