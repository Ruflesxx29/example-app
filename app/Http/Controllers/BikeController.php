<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bikes = Bike::all();
        return view('bike.old.index', ['activeBike' => 'active',
                    'subTitle' => 'Bikes - Index',
                    'bikes' => $bikes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bike.create', ['activeBike' => 'active', 'subTitle' => 'Bikes - Create']);
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
        $bike = new Bike($request->all());
        $bike->save();
        
        return redirect('bike');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Bike $bike)
    {
        //$bike = Bike::find($id);
        $bikes = Bike::all();
        return view('bike.old.index', ['activeBike' => 'active',
                                    'subTitle' => 'Bikes - Show - ' . $bike->name,
                                    'bike' => $bike,
                                  ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike) //Bike $bike)
    {
        return view('bike.edit', ['activeBike' => 'active',
                                  'bike' => $bike,
                                  'subTitle' => 'Bikes - Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //Bike $bike)
    {
       $bike->update($request->all());
       return redirect('/bike');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike) //Bike $bike)
    {
        // dentro de un try catch,  hay que devlver un mensaje de resultado de la operación
        $bike->delete();
        return redirect('/bike');
    }
}