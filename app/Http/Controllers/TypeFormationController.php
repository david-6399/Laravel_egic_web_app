<?php

namespace App\Http\Controllers;

use App\Models\type_formation;
use Illuminate\Http\Request;

class TypeFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_formation = type_formation::all();
        return view('admin.type_formation.index',compact('type_formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type_formation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        $type_formation = new type_formation;

        $type_formation->name = $request->input('name');
        $type_formation->description = $request->input('description');
        $type_formation->save();

        return redirect()->route('type_forma.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\type_formation  $type_formation
     * @return \Illuminate\Http\Response
     */
    public function show(type_formation $type_formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type_formation  $type_formation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_formation = type_formation::find($id);
        return view('admin.type_formation.edit',compact('type_formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type_formation  $type_formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type_formation = type_formation::find($id);
        $type_formation->update($request->all());

        return redirect()->route('type_forma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type_formation  $type_formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(type_formation $type_formation)
    {
        //
    }
}
