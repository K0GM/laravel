<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dulces;

class DulcesControlador extends Controller
{
    protected $dulces;
    public function __construct(Dulces $dulces)
    {
        $this->dulces = $dulces; 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dulces = $this->dulces->obtenerDulces();
        return view('dulces.lista', ['dulces' => $dulces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dulces.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dulces = new Dulces($request->all());
        $dulces->save();
        return redirect()->action([DulcesControlador::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dulces = $this->dulces->obtenerDulcesPorId($id);
        return view('dulces.ver', ['dulces' => $dulces]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dulces = $this->dulces->obtenerDulcesPorId($id);
        return view('dulces.editar', ['dulces' => $dulces]);
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
        $dulces = Dulces::find($id);
        $dulces->fill($request->all());
        $dulces->save();
        return redirect()->action([DulcesControlador::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dulces = Dulces::find($id);
        $dulces->delete();
        return redirect()->action([DulcesControlador::class, 'index']);
    }
}
