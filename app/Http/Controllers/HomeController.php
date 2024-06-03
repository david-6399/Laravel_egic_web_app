<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\formation;
use App\Models\program;
use App\Models\event;
use App\Models\type_formation;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $formation = formation::latest()->limit(4)->get();
        $program = program::latest()->limit(4)->get();
        $event = event::latest()->limit(4)->get();
        $type_formation = type_formation::latest()->limit(6)->get();

        return view('user.home',[
            'formations'=>$formation,
            'type_formation' => $type_formation,
            'program'=>$program,
            'event'=>$event,
        ]);
    }

    
    
    
}
