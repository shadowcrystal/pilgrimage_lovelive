<?php

namespace App\Http\Controllers;

use App\Group;
use App\Site;
use App\Character;
use Illuminate\Http\Request;

class RootController extends Controller
{
    public function index()
    {
      $sites = Site::all();

      $first = Site::all()->first();
      $last = Site::orderBy('id','desc')->first();
      return view('root/index',[
        'sites' => $sites,
        'start1' => $first->latlng1,
        'start2' => $first->latlng2,
        'last1' => $last->latlng1,
        'last2' => $last->latlng2,
      ]);
    }
}
