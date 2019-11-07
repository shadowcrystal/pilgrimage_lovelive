<?php

namespace App\Http\Controllers;

use App\Group;
use App\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    //top画面
    */
    public function home()
    {
      $groups = Group::all();
      $sites = Site::all();
      return view('home/index',[
        'groups' => $groups,
        'sites' => $sites,
      ]);
    }

    /*
    //site画面
    */
    public function site(int $id)
    {
      $site = Site::find($id);
      return view('site',[
        'site' => $site,
      ]);
    }
}
