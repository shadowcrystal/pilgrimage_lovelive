<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    //top画面
    */
    public function home()
    {
      return view('home/index');
    }
}
