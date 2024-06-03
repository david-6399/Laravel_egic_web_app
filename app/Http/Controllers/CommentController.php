<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\formation;
use App\Models\user;
use App\Models\comment;

class CommentController extends Controller
{
    public function add_comment(request $request,$id){
        $user = auth::user()->id;
        $formation = formation::find($id);

        $comment = new comment ;

        $comment->formation_id = $formation->id;
        $comment->user_id = $user ;
        $comment->contenu = $request->input('comment');

        $comment->save();

        return redirect()->back();

    }

    public function add_event_comment(request $request, $id){
        
        $event = \App\Models\event::find($id);
        $user = auth()->user()->id;

        $event = $event->id;

        $comment = new comment;

        $comment->user_id = $user;
        $comment->event_id = $event;
        $comment->contenu = $request->input('comment');
        $comment->save();

        return redirect()->back();
    }
}
