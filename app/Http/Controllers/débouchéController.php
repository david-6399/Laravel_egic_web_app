<?php

namespace App\Http\Controllers;

use App\Models\débouché;
use Illuminate\Http\Request;

class débouchéController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $débouché = débouché::all();
        return view('admin.débouché.index',compact('débouché'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.débouché.create');
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
        $débouché = new débouché;

        $débouché->name = $request->input('name');
        $débouché->description = $request->input('description');
        $débouché->save();

        return redirect()->route('débouché.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\débouché  $débouché
     * @return \Illuminate\Http\Response
     */
    public function show(débouché $débouché)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\débouché  $débouché
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $débouché=débouché::find($id);
        return view('admin.débouché.edit',compact('débouché'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\débouché  $débouché
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $débouché = débouché::find($id);
        $débouché->update($request->all());

        return redirect()->route('débouché.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\débouché  $débouché
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $débouché = débouché::find($id);
        $débouché->delete();

        return to_route('débouché.index');
    }
}
