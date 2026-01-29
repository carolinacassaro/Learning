<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = "Carolina";
        $surname = "Cassaro";

        return view('home', [
            'name' => $name,
            'surname' => $surname
        ]);
    }

    public function about(){
        return view('about');
    }
}
