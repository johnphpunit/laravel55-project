<?php
//use App\Http\Resources\User as UserResourece;
use App\Http\Resources\UserCollection;
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
    //$users =  \App\User::find(1);
    //return new UserResourece(\App\User::find(1));

   // $users =  \App\User::with('profile')->get();
    $users =  \App\User::latest()->paginate();
    //return  UserResourece::collection( $users);
    return new UserCollection($users);
});


