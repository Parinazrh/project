<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;


class UserController extends Controller
{
   public function list()
   {

//   $res= DB::table('users')->insert([
//    'username'=> 'rebeca','email'=> 'rebz@exampel.com','password'=> md5('456')
//    ]);
//   if ($res) return DB::table('users')->get(); //selec * from users
     //$record = DB::table('users')->get();
     $record = DB::table('users')->paginate(2);
      return view('users.list',["users"=>$record]);
   }
}
