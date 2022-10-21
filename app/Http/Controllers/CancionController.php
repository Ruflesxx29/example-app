<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $canciones = Cancion::all();
        return view('cancion.index', ['activeCancion' => 'active',
                    'subTitle' => 'Canciones - Index',
                    'canciones' => $canciones]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cancion.create', ['activeCancion' => 'active', 'subTitle' => 'Canciones - Create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //hacer en un try catch.
        $cancion = new Cancion($request->all());
        $cancion->save();
        
        return redirect('cancion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request $request
     * @param  \App\Models\Cancion $cancion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cancion $cancion)
    {
        //$bike = Bike::find($id);
        $canciones = Cancion::all();
        return view('cancion.show', ['activeCancion' => 'active',
                                    'subTitle' => 'Bikes - Show - ' . $cancion->titulo,
                                    'cancion' => $cancion,
                                  ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $cancion = Cancion::find($id);
        return view('cancion.edit', ['activeCancion' => 'active',
                                     'cancion' => $cancion,
                                     'subTitle' =>'Canciones- Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion) 
    {
       $cancion->update($request->all());
       return redirect('/cancion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        // dentro de un try catch,  hay que devlver un mensaje de resultado de la operación
        $cancion->delete();
        return redirect('/cancion');
    }
}