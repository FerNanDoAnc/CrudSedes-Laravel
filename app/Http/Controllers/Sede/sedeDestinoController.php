<?php

namespace App\Http\Controllers\Sede;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\prueba\SedeDestino;

class sedeDestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sedeDestinos=SedeDestino::all(); 
        return response()->json($sedeDestinos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sedeDestino=SedeDestino::create($request->post());
        return response()->json([
            'mensaje'=>'Sede Destino creado',
            'sedeDestino'=>$sedeDestino
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SedeDestino $sedeDestino)
    {
        //
        return response()->json($sedeDestino);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SedeDestino $sedeDestino)
    {
        //
        $sedeDestino->fill($request->post())->save();
        return response()->json([
            'mensaje'=>'Sede Destino actualizado',
            'sedeDestino'=>$sedeDestino
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SedeDestino $sedeDestino)
    {
        //
        $sedeDestino->delete();
        return response()->json([
            'mensaje'=>'Sede Destino eliminado',
            'sedeDestino'=>$sedeDestino
        ]);
    }
}
