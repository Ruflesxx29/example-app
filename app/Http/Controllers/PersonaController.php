<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $personas = Persona::all();
                return view('persona.index', ['activeBike' => 'active',
                            'subTitle' => 'Personas - Index',
                            'personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
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
        $persona = new Persona($request->all());
        $persona->save();
        
        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {

        return view('persona.show', ['activePersona' => 'active',
                                    'subTitle' => 'Personas - Show - ' . $persona->name,
                                    'persona' => $persona,
                                  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(persona $persona)
    {
            return view('persona.edit', ['activePersona' => 'active',
                                  'persona' => $persona,
                                  'subTitle' => 'Persona - Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persona $persona)
    {
           $persona->update($request->all());
       return redirect('/persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(persona $persona)
    {
           $persona->delete();
        return redirect('/persona');
    }
}
