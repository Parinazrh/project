<?php

use Illuminate\Support\Facades\Route;
//////
use Illuminate\Support\Facades\Validator;


use App\Http\Controllers\UserController;

use App\Http\Controllers\AddUserController;

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
    return view('home');
});


Route::get('/login', function () {
  return view('login');
});

Route::get('/register', function () {
  return view('register');
});


Route::get('/userlist', function () {
    $out= DB::table('users')->get();
    return view('users.list',['users'=>$out]);
  });


Route::get('/postlist', function () {
    $outp= DB::table('posts')->get();

   return view('users.post',['posts'=>$outp]);
});

Route::get('/roles', function () {
    $out= DB::table('users')->get();
    $outp= DB::table('posts')->get();
    return view('users.lispos',['users'=>$out],['posts'=>$outp]);
});

// Route::get('insert','AddUserController@insertform');
// Route::post('create','AddUserController@insert');

Route::post('/register',function(){

    $validate_data=Validator::make(request()->all,[
        'Name'=>'required!min:2|max:20',
        'Phone'=>'required!min:11|max:20',
        'Password'=>'required!min:4|max:4'
    ])->validated();

    // if($validater->fails()){
    //     return redirect()
    //                     ->back()
    //                     ->withErrors($validater);
    // }

});




//////////////////////////////////////////////////////////////////////
//Route::get('/article/create', 'ArticleController@create');
Route::get('/tehran', function () {
    return view('tehran');
  });
