<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddUserController extends Controller
{
    public function insertform() {
        return view('register');
     }

     public function insert(Request $request) {
        $name = $request->input('  ');
        $phone = $request->input('  ');
        DB::insert('insert into users (Name) values(?)',[$name]);
        DB::insert('insert into users (Phone) values(?)',[$phone]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';

     }
}

class StudInsertController extends Controller {
   public function insertform() {
      return view('stud_create');
   }

   public function insert(Request $request) {
      $name = $request->input('stud_name');
      DB::insert('insert into student (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}
