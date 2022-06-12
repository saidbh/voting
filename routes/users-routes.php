<?php
namespace  App\Http\Controllers;
namespace  App\Http\Controllers\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
Route::group(['middleware'=>['auth:web','routes', 'Role:user'],'except'=>'logout'],function(){
       Route::get('logout',function(){
        Session::flush();
         Auth::logout();
             return redirect('login');
         })->name('logout');
    Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');

    Route::group(['prefix'=>'Condidate','name'=>'condidates'],function(){
        Route::resource('/condidate/list',Sessions\SessionsController::class)->names([
            'index' => 'condidates-list',
            'create' => 'condidates.create',
            'store' => 'condidates.store',
            'show' => 'condidates.show',
            'edit' => 'condidates.edit',
            'update' => 'condidates.update',
            'destroy' => 'condidates.destroy',
        ]);
        Route::get('/validation',[Sessions\SessionsController::class,'validation'])->name('condidate-validation');
    });
    Route::group(['prefix'=>'vote','name'=>'votes'],function(){
        Route::resource('/voting/list',Votes\VotesController::class)->names([
            'index' => 'voting-list',
            'create' => 'voting-list.create',
            'store' => 'voting-list.store',
            'show' => 'voting-list.show',
            'edit' => 'voting-list.edit',
            'update' => 'voting-list.update',
            'destroy' => 'voting-list.destroy',
        ]);
        Route::post('/condidates/list',[Votes\VotesController::class,'getCondidateList'])->name('condidates-voting-list');
    });
    Route::group(['prefix'=>'result','name'=>'results'],function(){
        Route::resource('/results/list',results\ResultsController::class)->names([
            'index' => 'result-list',
            'create' => 'result-list.create',
            'store' => 'result-list.store',
            'show' => 'result-list.show',
            'edit' => 'result-list.edit',
            'update' => 'result-list.update',
            'destroy' => 'result-list.destroy',
        ]);
    });
});
