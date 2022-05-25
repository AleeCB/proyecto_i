<?php

namespace App\Http\Controllers;

use App\Models\dispositivo;
use App\Http\Requests\StoredispositivoRequest;
use App\Http\Requests\UpdatedispositivoRequest;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dispositivo.index')->with('dispositivo', Conducto::all());
        //  $request->validate([
        //     'numeroSerie'  => 'required',
        //     'marca'   => 'required',
        //     'modelo' => 'required'
        // ]);  
        
        // Unidad::create([
        //     'numeroSerie'  => $request->numeroSerie,
        //     'marca'   => $request->marca,
        //     'modelo' => $request->modelo
            
        // ]);

        // return redirect()->route('dispositivo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispositivo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredispositivoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredispositivoRequest $request)
    {
        $request->validate([
            'numeroSerie'  => 'required',
            'marca'   => 'required',
            'modelo' => 'required'
        ]);  
        
        Unidad::create([
            'numeroSerie'  => $request->numeroSerie,
            'marca'   => $request->marca,
            'modelo' => $request->modelo
            
        ]);

        return redirect()->route('dispositivo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function show(dispositivo $dispositivo)
    {
        return view('dispositivos.show', compact('dispositivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function edit(dispositivo $dispositivo)
    {
        return view('dispositivos.show', compact('dispositivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedispositivoRequest  $request
     * @param  \App\Models\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedispositivoRequest $request, dispositivo $dispositivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dispositivo  $dispositivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(dispositivo $dispositivo)
    {
        $dispositivo->delete();
        return redirect()->route('dispositivo.index');
    }

    public function datatable()
    {
       $dispositivos = dispositivo::all();
        return view('dispositivos.datatable', compact('dispositivos'));
    }    
}
