<?php

namespace App\Http\Controllers;

use App\Models\niv_etudiant;
use Illuminate\Http\Request;

class NivEtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niv_etudiant = niv_etudiant::all();
        return view('admin.niv_etudiant.index',compact('niv_etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.niv_etudiant.create');
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
            'name'=>'required'
        ]);
        $niv_etudiant = new niv_etudiant;

        $niv_etudiant->name = $request->input('name');
        $niv_etudiant->save();

        return redirect()->route('niv_etudiant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\niv_etudiant  $niv_etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(niv_etudiant $niv_etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\niv_etudiant  $niv_etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $niv_etudiant = niv_etudiant::find($id);
        return view('admin.niv_etudiant.edit',compact('niv_etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\niv_etudiant  $niv_etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $niv_etudiant = niv_etudiant::find($id);
        $niv_etudiant->update($request->all());

        return redirect()->route('niv_etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\niv_etudiant  $niv_etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(niv_etudiant $niv_etudiant)
    {
        //
    }
}
