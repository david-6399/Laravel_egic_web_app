<?php

namespace App\Http\Controllers;

use App\Models\support_cours;
use Illuminate\Http\Request;
use App\Models\module;


class SupportCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $support_cours = support_cours::all();
        return view('admin.support_cours.index',compact('support_cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module=module::all();
        return view('admin.support_cours.create',compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $support_cours = new support_cours;

        $newcontenu = uniqid().'-'.$request->name.'.'.$request->contenu->extension();
        $request->contenu->move(public_path('contenus'),$newcontenu);
        
        $date2=date('Y-m-d');

        $support_cours->name = $request->input('name');
        $support_cours->contenu = $newcontenu;
        $support_cours->date = $date2;
        $support_cours->nome_prof = $request->input('nome_prof');
        $support_cours->cod_module = $request->input('cod_module');

        $support_cours->save();

        return redirect()->route('support_cours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\support_cours  $support_cours
     * @return \Illuminate\Http\Response
     */
    public function show(support_cours $support_cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\support_cours  $support_cours
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $support_cours = support_cours::find($id);
        $module = module::all();
        return view('admin.support_cours.edit',compact('support_cours','module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\support_cours  $support_cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $support_cours = support_cours::find($id);
        $support_cours ->update($request->all());
        return redirect()->route('support_cours.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\support_cours  $support_cours
     * @return \Illuminate\Http\Response
     */
    public function destroy(support_cours $support_cours)
    {
        //
    }
}
