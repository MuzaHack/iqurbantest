<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventController;
use App\Http\Controllers\userController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\welcomeController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::view('e','viewevent');

//Route::get('profile',[userController::class,'list']);
//Route::get('profile',[userController::class,'profile']) ->middleware('authcheck');

Route::group(['middleware'=>['alreadyin']],function(){



    Route::view('iqurban','welcometoiqurban');
    Route::post('iqurban',[userController::class,'login']);

    Route::view('registration','registeruser');
    Route::post('registration',[userController::class,'addUser']);

    Route::view('usercreated','usercreated');

    Route::view('aboutus','aboutus');


});


Route::group(['middleware'=>['authcheck']],function(){

    Route::view('home','home');

    Route::get('profile',[userController::class,'profile']);

    Route::get('editprofile/{id}',[userController::class,'edit']);
    Route::post('editprofile',[userController::class,'update']);

    Route::get('event',[eventController::class,'event']);

    Route::view('organize','organize');
    //Route::get('organize/{id}',[userController::class,'pass']);

    Route::get('editevent/{id}',[eventController::class,'edit']);
    Route::post('editevent',[eventController::class,'update']);

    Route::get('orderhistory',[orderController::class,'orderlist']);

    Route::view('createevent','createevent');
    Route::post('createevent',[eventController::class,'addEvent']);

    Route::get('eventcreated',[eventController::class,'created']);

    Route::get('registeredevent',[eventController::class,'list']);

    Route::get('deleteconfirmation/{id}',[eventController::class,'deleteconfirm']);
    
    Route::get('delete/{id}',[eventController::class,'delete']);

    Route::get('eventdetails/{id}',[eventController::class,'eventdetail']);

    Route::get('viewevent/{id}',[eventController::class,'viewevent']);
    Route::post('viewevent/{id}',[orderController::class,'addOrder']);

    Route::get('cancelorder/{id}',[orderController::class,'deletecurrorder']);

    
    //Route::view('viewevent/confirmorder','confirmorder');
    Route::post('/confirmorder',[orderController::class,'submitorder']);


    Route::get('orderdetail/{id}',[orderController::class,'orderdetail']);


    Route::view('givefeedback','givefeedback');
    

});

Route::view('del','eventdeleteconfirmation');

Route::get('participants/{id}',[orderController::class,'participants']);

Route::view('adhome','admin/adhome');

Route::view('adprofile','admin/adprofile');



Route::get('logout',[userController::class,'logout']);









//Route::get('user',[userController::class,'all']);








