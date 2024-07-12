<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('home.index');
    }
    public function documentation(){
        return view('home.documentation');
    }
    public function contact(){
        return view('home.contact');
    }
    public function product(){
        return view('home.product');
    }
}
