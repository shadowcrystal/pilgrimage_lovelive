<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    //top画面
    */
    public function home()
    {
      $groups = Group::all();
      return view('home/index',[
        'groups' => $groups,
      ]);
    }

    /*
    //site画面
    */
    public function site(int $id)
    {
      return view('site');
    }
}
