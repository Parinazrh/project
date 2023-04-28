<?php
use Illuminate\support\Facades\Route;
use Illuminate\Controllers\HomeController;




//baray etesal be dadabase
$rr= DB::table('posts')->insert([
    'title'=>'php','content'=>'I know the php','user_id'=>'4'
]);

dd($rr);
