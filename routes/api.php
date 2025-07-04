<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//here wecreate route for api
Route::get("/test",function(){

    return ["name"=>"deepak sharma","age"=>"55"];

});

//api to fetch data from db
Route::get('Data',[UserController::class,'getData']);

//for postapis
Route::post('addData',[UserController::class,'addData']);

//for put 
Route::put('update',[UserController::class,'update']);

//for delete 
Route::delete('delete',[UserController::class,'delete']);

//resource controller 
Route::resource('resource',UserDataController::class);


//forlogin

Route::post('signup',[UserController::class,'UserSignUp']);
Route::post('login',[UserController::class,'UserLogin']);


