<?php


// [DONE] NB formation by month
// NB user by month
// NB user by contry



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\db;

use App\Models\formation;
use App\Models\program;
use App\Models\user;
use App\Models\niv_etudiant;
use App\Models\event;

class adminController extends Controller
{  
    
    public function dashboard(){
        
        
        $lastformation = formation::latest()->take(4)->get();
        $lastprogram = program::latest()->take(4)->get();
        $lastevent = event::latest()->take(4)->get();
        
        $lastadditions = collect([
            'formation' => $lastformation,
            'program' => $lastprogram,
            'event'=> $lastevent,
            ])->flatten()->sortbydesc('created_at')->take(5);
        
        $comment = db::table('comments')->join('users','comments.user_id','users.id')
            ->join('formations','comments.formation_id','formations.id')->get();

        // dd($comment);

        $formation = formation::all();
        $userinfos = user::all();
        
        $niv_etudiant = niv_etudiant::all();

        $mostfavoris = formation::orderby('favoris','desc')->first();
        

        $test = formation::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('YEAR(created_at) as year'),
            Db::raw('SUM(tarif_forma) as total'),
            db::raw('COUNT(*) as count')
        )
        ->groupBy('month','year')
        ->get();
        
        
        $label = [1=>'jan','fev','mar','apr','mai','jun','jul','aut','sep','oct','nov','dec'];
        $total = $count = [];
        
        foreach($test as $test){
            $count[$test->month] = $test->count;
            $total[$test->month] = $test->total;
        }
        
        foreach($label as $month =>$name){
            if(!array_key_exists($month , $total)){
                $total[$month] = 0 ;
            }
            if(!array_key_exists($month , $count)){
                $count[$month] = 0 ;
            }
        }
        ksort($total);
        ksort($count);
        

        

        $mycahrt = [
            'label' => array_values($label),
            'dataset' => [
                [
                    'label'=> 'Total',
                    'data'=> array_values($total),
                    'yAxisID'=> 'y-left',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1
                ],
                [
                    'label'=> 'count',
                    'data'=> array_values($count),
                    'yAxisID'=> 'y-right',
                    'backgroundColor' => 'rgba(75, 192, 12, 0.2)',
                    'borderColor' => 'rgba(75, 192, 12, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];

        
        $users = user::select([
            db::raw('MONTH(created_at) as month'),
            db::raw('COUNT(*) as count')
        ])->groupBy('month')->get();
        
        $nbuser = [] ;
   
        foreach($users as $users){
            $nbuser[$users->month] = $users->count;
        }
        
        $label = [1 => 'jan', 'fev', 'mar', 'apr', 'mai', 'jun', 'jul', 'aut', 'sep', 'oct', 'nov', 'dec'];
        
        foreach($label as $month => $name){
            if(!array_key_exists($month , $nbuser)){
                $nbuser[$month] = 0 ;
            }
            
        }
        ksort($nbuser);


        $userchart = [
            'label' => array_values($label),
            'dataset' => [
                [
                    'label' => 'Number of users by month',
                    'data' => array_values($nbuser),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 4)',
                    'borderWidth' => 1
                ]
            ],
        ];

        $formations = formation::pluck('nome_forma')->toarray();
        $favoris = formation::pluck('favoris')->toarray();
       
        $formationandfavoris = [];
        foreach($formations as $index => $formation){
            $test = $favoris[$index];
            $formationandfavoris [] = [
                'formation' => $formation,
                'favoris' => $test
            ];
        }
        usort($formationandfavoris, function($a, $b) {
            return $b['favoris'] - $a['favoris'];
        });
        
        $formationandfavoris = array_slice($formationandfavoris, 0, 5);

        $labels = array_column($formationandfavoris, 'formation');
        $data = array_column($formationandfavoris, 'favoris');

        $chart99 = [
            'label' => $labels,
            'dataset' => [
                [
                    'label' => 'Favoris',
                    'data' => $data,
                    'backgroundColor' => [
                        'rgb(255, 65, 145)',
                        'rgb(255, 240, 120)',
                        'rgb(54, 186, 152)',
                        'rgb(244, 162, 97)',
                        'rgb(231, 111, 81)'
                    ],
                    'borderWidth' => 1,
                ]
            ]
        ];
        

        if(auth::check()){
            $usertype = auth::user()->usertype;
            if ($usertype == 1) {
                return view('admin.dashboard',compact('lastadditions','mostfavoris','userinfos','formation','niv_etudiant','comment','mycahrt','userchart','chart99'));
            }
            else{
                abort(404);
                
            }
        }else{
            return redirect()->route('login');
        }


    }

    public function approvuser(request $request,$id){
        $user = user::find($id);
        $user->update(['usertype'=> 3]);
        return redirect()->back();

    }

    public function event_list($id){
        $event = event::find($id);  
        $list_user_event = db::table('user_events')
        ->leftjoin('events','user_events.event_id','=','events.id')
        ->join('users','user_events.user_id','=','users.id')
        ->where('event_id',$event->id)
        ->get();
        
        // dd($list_user_event);
        return view('admin.events.user-event-list',[
            'list_user_event' => $list_user_event ,
            'event' =>$event,
        ]);
    }

   

    
}
