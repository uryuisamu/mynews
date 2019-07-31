<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function add(){
        //var_dump("ts");
        //$a = 22222;
        //$b = "test";
        //$c = [$a, $b];
        //var_dump($a, $b, $c);
        //var_dump();
        //echo $a;
        //error_log($a);
        $newsList = ["よしもと炎上", "選挙", "スマホ"];
        return view('admin.news.create', compact("newsList"));
    
    }    
}
