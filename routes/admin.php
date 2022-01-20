<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ThreadController;
use App\Http\Controllers\Admin\DashboardController;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(Function(){
    Route::get('/', [DashboardController::class,'index']);
    Route::resource('/users',UsersController::class);
    Route::resource('/roles',RolesController::class);
    Route::resource('/threads',ThreadController::class);

    // route::get('/role',function(){
    //     $roles = Role::with(['users'=> function($query){
    //         $query->select('name','email','role_id');
    //     }])->get();
    //     return response()->json($roles);
    // });

});