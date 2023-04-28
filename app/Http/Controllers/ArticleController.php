<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller
{

    public function create(){
        //raveshe 1---> $article = Article::create(['title' => 'learn laravel ','body'=>'how to work with laravel?']);

        //raveshe 2--->
    //    $myarticle= new Article;

    //    $myarticle->title = "learn php";
    //    $myarticle->body = "how to work with PHP?";

    //    $flight->save();
       //end raveshe 1
       return Article::all();
    }


}
