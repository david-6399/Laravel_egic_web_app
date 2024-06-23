<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\program_modul;

class program_moduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program_module = db::table('program_moduls')
        ->join('programs','program_moduls.program_id','programs.id')
        ->join('modules','program_moduls.module_id','modules.id')
        ->get();
        return view('admin.program_module.index',compact('program_module'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = \App\Models\program::all();
        $module = \App\Models\module::all();
        return view('admin.program_module.create',compact('program','module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check_program = program_modul::where('program_id',$request->program_id)->where('module_id',$request->module_id)->first();
        // $check_module = program_modul::where('module_id',$request->module_id)->first();
        
        if($check_program){
           
            return to_route('program_module.create')->with('error','Le Program Avec Ce Module Existent Déjà - Entrez à Nouveau');
        }
        else{
        $program_module = new program_modul;

        $program_module->program_id = $request->input('program_id');
        $program_module->module_id = $request->input('module_id');

        $program_module->save();

        return redirect()->route('program_module.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
