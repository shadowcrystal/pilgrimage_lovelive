<?php

namespace App\Http\Controllers;

use App\Group;
use App\Site;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /*
    **グループ選択後
    */
    public function index(int $group_id)
    {
      $group = Group::find($group_id);

      $sites = Site::where('group_id',$group->id)->get();

      return view('group/index',[
        'group' => $group,
        'sites' => $sites,
      ]);
    }

    /*
    **
    */
    public function site(int $group_id,int $id)
    {
      $group = Group::find($group_id);

      $site = Site::find($id);

      return view('site',[
        'group' => $group,
        'site' => $site,
      ]);
    }
}
