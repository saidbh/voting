<?php

namespace  App\Http\Controllers;
namespace  App\Http\Controllers\Admin;
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
Route::group(['middleware'=>['auth:web','routes', 'Role:admin'],'except'=>'logout', 'prefix' => 'admin'],function(){
    Route::get('logout',function(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    })->name('admin.logout');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::group(['prefix'=>'users','name'=>'users'],function(){

        Route::resource('users-accounts', Accounts\AccountsController::class)->names([
            'index' => 'users-accounts.list',
            'create' => 'users-accounts.create',
            'store' => 'users-accounts.store',
            'edit' => 'users-accounts.edit',
            'update' => 'users-accounts.update',
            'destroy' => 'users-accounts.destroy'
        ]);

    });

    Route::group(['prefix'=>'system','name'=>'system'],function(){
        Route::get('/',function(){return redirect('admin.dashboard');})->name('system');

        Route::resource('role-permission', System\RolePermissionController::class)->names([
            'index' => 'system-role-permission',
            'create' => 'system-role-permission.create',
            'store' => 'system-role-permission.store',
            'edit' => 'system-role-permission.edit',
            'update' => 'system-role-permission.update',
            'destroy' => 'system-role-permission.destroy'
        ]);

        Route::resource('assign-role', System\AssignRoleController::class)->names([
            'index' => 'system-assign-role',
            'create' => 'system-assign-role.create',
            'store' => 'system-assign-role.store',
            'edit' => 'system-assign-role.edit',
            'update' => 'system-assign-role.update',
            'destroy' => 'system-assign-role.destroy',
        ]);

        Route::resource('dictionary', System\DictionaryController::class)->names([
            'index'=>'system-dictionary',
            'create' => 'system-dictionary.create',
            'store' => 'system-dictionary.store',
            'edit' => 'system-dictionary.edit',
            'update' => 'system-dictionary.update',
            'destroy' => 'system-dictionary.destroy',
        ]);
    });
    Route::group(['prefix'=>'sessions','name'=>'sessions'],function(){
        Route::resource('sessions', Sessions\SessionsController::class)->names([
            'index'=>'sessions-list',
            'create' => 'sessions-list.create',
            'store' => 'sessions-list.store',
            'edit' => 'sessions-list.edit',
            'update' => 'sessions-list.update',
            'destroy' => 'sessions-list.destroy',
        ]);
    });
    Route::group(['prefix'=>'votes','name'=>'votes'],function(){
        Route::resource('votes', Voting\VotingController::class)->names([
            'index'=>'votes-list',
            'create' => 'votes-list.create',
            'store' => 'votes-list.store',
            'edit' => 'votes-list.edit',
            'update' => 'votes-list.update',
            'destroy' => 'votes-list.destroy',
        ]);
        Route::post('/list/vote/count',[Voting\VotingController::class,'getCondidatesResults'])->name('votes-count-result');
    });
    Route::group(['prefix'=>'voting-results','name'=>'voting-results'],function(){
        Route::resource('voting-results', Results\ResultsController::class)->names([
            'index'=>'results-list',
            'create' => 'results-list.create',
            'store' => 'results-list.store',
            'edit' => 'results-list.edit',
            'update' => 'results-list.update',
            'destroy' => 'results-list.destroy',
        ]);
        Route::post('/list/vote/count',[Results\ResultsController::class,'getVotesResults'])->name('votes-results');
    });

});
