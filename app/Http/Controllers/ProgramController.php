<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\formation;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $program = program::all();
        $formation= formation::all();
        
        return view('admin.program.index',compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formation= formation::all();
        return view('admin.program.create',compact('formation'));
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
            'titre'=>'required',
        ]);

       
        $program = new program;

        $program->titre = $request->input('titre');
        $program->save();
        return redirect()->route('program.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = program::find($id);
        $formation= formation::all();
        return view('admin.program.edit',compact('program','formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $program = program::find($id);
        $program->update($request->all());

        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(program $program)
    {
        //
    }
}
