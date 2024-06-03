<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('check_usertype')->except('show');
    }

    public function index()
    {
        $i=0;
        $event = event::all();
        return view('admin.Events.index',compact('event','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'titre'=>'required',
            'description'=>'required | max:255',
            'event_start'=>'required | date |after_or_equal:today',
            'event_end'=>'required |date',
            'image_path'=> ' nullable | mimes:png,jpg,jpeg | max:5048'
        ]);
        
        $event = new Event ;

        if($request->hasfile('image_path')){
            $newimage = uniqid().'-'.$request->titre.'.'.$request->image->extension();
            $request->image->move(public_path('images',$newimage));
            $event->image_path = $newimage;

        }

        $event->titre = $request->input('titre');
        $event->description = $request->input('description');
        $event->event_start = $request->event_start;
        $event->event_end = $request->event_end;
        
        $event->save();
        
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = event::find($id);
        return view('user.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = event::find($id);
        return view('admin.Events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = event::find($id);

        $event->update($request->all());

        return to_route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = event::find($id);

        $event->delete();

        return to_route('event.index');
    }
}
