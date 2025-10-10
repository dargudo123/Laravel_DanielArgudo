<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos=DB::table('proyectos')->get();
        return view("projects/index",['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Proyectos::create($request->all());
        return redirect('projects/')
        ->with('success', 'Proyecto creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto=Proyectos::find($id);
        return view("projects/update",compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required'
        ]);
        $proyecto=Proyectos::find($id);
        $proyecto -> update($request->all());
        return redirect('projects/')
        ->with('success', 'Proyecto actualizado satisfactoriamente.');
    }

    public function eliminate($id) 
    {
        $proyecto = Proyectos::find($id);
        return view('projects/eliminate', compact('proyecto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyecto = Proyectos::find($id);
        $proyecto->delete();

         return redirect('projects/')
        ->with('success', 'Proyecto eliminado satisfactoriamente.');
    }

}
