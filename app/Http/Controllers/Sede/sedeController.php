<?php

namespace App\Http\Controllers\Sede;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\prueba\Sede;

class sedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sedes=Sede::all(); 
        return response()->json($sedes);
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
        $sede=Sede::create($request->post());
        return response()->json([
            'mensaje'=>'Sede creada',
            'sede'=>$sede
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $sede)
    {
        //

        return response()->json($sede);
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
    public function update(Request $request, Sede $sede)
    {
        //

        $sede->fill($request->post())->save();
        return response()->json([
            'mensaje'=>'Sede actualizada',
            'sede'=>$sede
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sede $sede)
    {
        //
        $sede->delete();
        return response()->json([
            'mensaje'=>'Sede eliminada',
            'sede'=>$sede
        ]);
    }
}
