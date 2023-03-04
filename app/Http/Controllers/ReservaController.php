<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
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
        $reserva= Reserva::all();
        return view('reserva.index')->with('reserva',$reserva);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = new Reserva();
        $reserva->codVehiculo=$request->get('codVehiculo');
        $reserva->fecha=$request->get('fecha');
        $reserva->destino=$request->get('destino');
        $reserva->kilometros=$request->get('kilometros');
        $reserva->codEmpleado=$request->get('codEmpleado');
        $reserva->save();
        return redirect('/reserva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::find($id);
        return view('reserva.edit')->with('reserva',$reserva);

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
        $reserva = Reserva::find($id);
        $reserva->codVehiculo=$request->get('codVehiculo');
        $reserva->codEmpleado=$request->get('codEmpleado');
        $reserva->fecha=$request->get('fecha');
        $reserva->destino=$request->get('destino');
        $reserva->kilometros=$request->get('kilometros');
        $reserva->save();
        return redirect('/reserva');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();
        return redirect('/reserva');
    }
}
