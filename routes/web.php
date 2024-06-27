<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\débouchéController;
use App\Http\Controllers\TypeFormationController;
use App\Http\Controllers\NivEtudiantController;
use App\Http\Controllers\formation_débouchéController;
use App\Http\Controllers\program_moduleController;
use App\Http\Controllers\userController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\supportcoursController;
use App\Http\Controllers\UserNivEtudController;
use App\Http\Controllers\CommentController;
use App\Models\user_formation;
use App\Models\formation;
use App\Models\user;
use App\Notifications\ImprimerLinscriptionSurEmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Resource Route start here

Route::resource('/formation', FormationController::class);

// Route::resource('/formation/create', FormationController::class)->middleware(['auth','check_usertype']);

route::middleware('auth')->group( function(){

    route::resource('/user_niv_etud',UserNivEtudController::class);

    route::middleware('check_usertype')->group(function(){
        Route::resource('/program', ProgramController::class);
        Route::resource('/débouché', débouchéController::class);        
        Route::resource('/module', ModuleController::class);        
        Route::resource('/type_forma', TypeFormationController::class);        
        Route::resource('/niv_etudiant', NivEtudiantController::class);        
        route::resource('/forma_débouché',formation_débouchéController::class);        
        Route::resource('/forma_nivetudiant', App\Http\Controllers\formation_niv_etudiantController::class);        
        Route::resource('/program_module', program_moduleController::class);        
        Route::resource('/support_cours', supportcoursController::class);    
    });
});



Route::resource('/event', EventController::class);

// Resource Route end here

// Admin Controller

route::controller(adminController::class)->group(function(){
    
    route::post('approvuser/{id}','approvuser');
    route::get('/event_list/{id}','event_list');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    // route::get('/no-data-in-page','nodata')->name('nodata');
});



// user Controllers start here |>|>
Route::get('/evenement', function () {
    $event = \App\Models\event::all();
    return view('user.Events.index',compact('event'));
});

route::get('/contact',function(){
    return view('user.contact');
});

route::get('/about',function(){
    $comment = \App\Models\comment::all();
    return view('user.about',compact('comment'));
});

route::controller(userController::class)->group(function(){
    
    route::middleware('auth')->group(function(){
        Route::get('/mycart',  'afficher_mycart');
        Route::post('/add_to_cart/{id}', 'add_to_cart');
        Route::post('/event_abonne/{id}',  'event_abonne');
    });

    route::get('/course' , 'afficher_course')->name('course'); 
    Route::get('/search',  'search')->name('search');

});

route::controller(CommentController::class)->middleware('auth')->group(function(){
    route::post('/add_comment/{id}','add_comment');
    route::post('/add_event_comment/{id}','add_event_comment');
});

route::get('imprimer', function (){
    dd('L"utilisateur va recevé un mail de préinscription');
})->name('imprimer');

// user Controllers end here <|<|

route::get('/send', function(){
    $user = user::find(auth::user()->id);
    // dd($user);    
    $testmail = 'hello';
    $user->notify(new ImprimerLinscriptionSurEmail($testmail));
});