<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    /*
    **グループ選択後
    */
    public function index(string $name)
    {
      return view('group/index');
    }

    /*
    **
    */
    public function site(string $name,int $id)
    {
      return view('site');
    }
}
