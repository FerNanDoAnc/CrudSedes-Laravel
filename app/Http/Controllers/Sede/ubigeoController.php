<?php

namespace App\Http\Controllers\Sede;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\prueba\Ubigeo;

class ubigeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ubigeos=Ubigeo::all(); 
        return response()->json($ubigeos);
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
        $ubigeo=Ubigeo::create($request->post());
        return response()->json([
            'mensaje'=>'Ubigeo creado',
            'ubigeo'=>$ubigeo
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ubigeo $ubigeo)
    {
        //
        return response()->json($ubigeo);
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
    public function update(Request $request, Ubigeo $ubigeo)
    {
        //
        $ubigeo->fill($request->post())->save();
        return response()->json([
            'mensaje'=>'Ubigeo actualizado',
            'ubigeo'=>$ubigeo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubigeo $ubigeo)
    {
        //
        $ubigeo->delete();
        return response()->json([
            'mensaje'=>'Ubigeo eliminado',
            'ubigeo'=>$ubigeo
        ]);
    }
    
}
