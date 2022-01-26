<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ThreadController;
use App\Http\Controllers\Admin\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => LaravelLocalization::setLocale(),
              'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
	Route::middleware(['auth','ifAdmin'])->prefix('admin')->group(Function(){
        Route::get('/', [DashboardController::class,'index']);
        Route::resource('/users',UsersController::class);
        Route::resource('/roles',RolesController::class);
        Route::resource('/threads',ThreadController::class);
        Route::get('/users/{user}/posts',[UsersController::class,'showThreads'])->name('users.showthreads');
        // Route::get('/threads',ThreadController::class,'image');
        // Route::post('/threads/create',ThreadController::class ,'imageStore')->name('image.store');
        // Route::get('/threads','ThreadController@create');
        // Route::post('/threads',['ThreadController@store')->name('threads.store');    
        // route::get('/role',function(){
        //     $roles = Role::with(['users'=> function($query){
        //         $query->select('name','email','role_id');
        //     }])->get();
        //     return response()->json($roles);
        // });
    
});


});