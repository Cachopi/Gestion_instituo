<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;
use Illuminate\Http\Request;




class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $profesores = Profesor::all();
      return view("profesores.listado",["profesores"=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("profesores.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $datos = $request->input();
        $profesor = new Profesor ($datos);
        info("Profesor: ".$profesor);
        $profesor->save();
//        return redirect(route("profesores.index"));
        session()->flash("creado","se ha agregado un nuevo profesor con nombre ".$profesor['nombre']);
        $profesores = Profesor::all();
        return view("profesores.listado",["profesores"=>$profesores]);



        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $profesor= Profesor::find($id);
        return view ("profesores.edit", ['profesor'=>$profesor]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, int $id)
    {
        $profesor = Profesor::find($id);
        $profesor->update($request->input());
        $profesores = Profesor::all();
        return view ("profesores.listado",["profesores"=>$profesores]);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        session()->flash("borrado","se a borrado");
        $profesores = Profesor::all();
        return view ("profesores.listado",["profesores"=>$profesores]);

        //
    }
}
