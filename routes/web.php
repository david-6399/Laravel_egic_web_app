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
use App\Models\user_formation;
use App\Models\formation;
use App\Models\user;

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
Route::get('/dashboard', [App\Http\Controllers\adminController::class, 'dashboard'])->name('dashboard');


// Resource Route start here

Route::resource('/formation', FormationController::class);

// Route::resource('/formation/create', FormationController::class)->middleware(['auth','check_usertype']);

Route::resource('/program', ProgramController::class)->middleware(['auth','check_usertype']);

Route::resource('/débouché', débouchéController::class)->middleware(['auth','check_usertype']);

Route::resource('/module', ModuleController::class)->middleware(['auth','check_usertype']);

Route::resource('/type_forma', TypeFormationController::class)->middleware(['auth','check_usertype']);

Route::resource('/event', EventController::class);

Route::resource('/niv_etudiant', NivEtudiantController::class)->middleware(['auth','check_usertype']);

route::resource('/forma_débouché',formation_débouchéController::class)->middleware(['auth','check_usertype']);

route::resource('/user_niv_etud',UserNivEtudController::class)->middleware('auth');

Route::resource('/forma_nivetudiant', App\Http\Controllers\formation_niv_etudiantController::class)->middleware(['auth','check_usertype']);

Route::resource('/program_module', program_moduleController::class)->middleware(['auth','check_usertype']);

Route::resource('/support_cours', supportcoursController::class)->middleware(['auth','check_usertype']);


// Resource Route end here

// Admin Controller

route::post('approvuser/{id}',[App\Http\Controllers\adminController::class,'approvuser']);
route::get('/event_list/{id}',[adminController::class,'event_list']);


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

route::get('/course' , [ userController::class , 'afficher_course'])->name('course');

Route::get('/mycart', [userController::class , 'afficher_mycart'])
    ->middleware('auth');

Route::post('/add_to_cart/{id}', [userController::class , 'add_to_cart'] )
    ->middleware('auth');

route::post('/add_comment/{id}',[App\Http\Controllers\CommentController::class,'add_comment'])
    ->middleware('auth');

route::post('/add_event_comment/{id}',[App\Http\Controllers\CommentController::class,'add_event_comment'])
    ->middleware('auth');

Route::post('/event_abonne/{id}', [userController::class , 'event_abonne'])
    ->middleware('auth');

Route::get('/search', [userController::class , 'search'])->name('search');

route::get('/no-data-in-page',[App\Http\Controllers\adminController::class , 'nodata'])->name('nodata');

// user Controllers end here <|<|