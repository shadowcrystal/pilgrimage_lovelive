<?php

namespace App\Http\Controllers;

use App\Group;
use App\Site;
use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /*
    **
    */
    public function index(int $group_id)
    {
      $group = Group::find($group_id);
      $episodes = Episode::where('group_id',$group_id)->get();

      return view('episode/index',[
        'group' => $group,
        'episodes' => $episodes,
      ]);
    }

    /*
    **
    */
    public function select(int $group_id,int $episode_id)
    {
      $group = Group::find($group_id);
      $episode = Episode::find($episode_id);

      return view('episode/select',[
        'group' => $group,
        'episode' => $episode,
      ]);
    }
}
