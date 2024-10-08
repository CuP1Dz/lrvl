<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    }
    
    public function showArray(){
        $array = [
            ["id" => 1, "title" => "bobr", "price" => 50000,"path" => "img/1.png"],
            ["id" => 2, "title" => "bobr", "price" => 60000,"path" => "img/1.png"],
            ["id" => 3, "title" => "bobr", "price" => 70000,"path" => "img/1.png"],
            ["id" => 4, "title" => "bobr", "price" => 80000,"path" => "img/1.png"],
            ["id" => 5, "title" => "bobr", "price" => 90000,"path" => "img/1.png"],
            ["id" => 6, "title" => "bobr", "price" => 100000,"path" => "img/1.png"],
            ["id" => 7, "title" => "bobr", "price" => 110000,"path" => "img/1.png"],
        ];
        return view('array', compact("array"));
    }
}