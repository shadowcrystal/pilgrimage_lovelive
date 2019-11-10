<?php

namespace App\Http\Controllers;

use App\Group;
use App\Character;
use App\Episode;
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
      $characters = Character::where('group_id',$group->id)->get();
      $episodes = Episode::where('group_id',$group->id)->get();
      $sites = Site::where('group_id',$group->id)->get();

      return view('group/index',[
        'group' => $group,
        'characters' => $characters,
        'episodes' => $episodes,
        'sites' => $sites,
      ]);
    }

}
