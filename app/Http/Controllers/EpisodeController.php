<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Episodes;
=======
use App\Group;
use App\Site;
use App\Episode;
>>>>>>> 79006d3c32431ceb91af35a88ace87458a25e509
use Illuminate\Http\Request;

class EpisodeController extends Controller
<<<<<<< HEAD
  {
    public function index()
    {
      return view('episode.index');
    }

    public function select()
    {
      $id=Episodes::all();
      return view('episode.select',[
        'eid'=>$id,
      ]);
    }

    public function site(string $name,int $eid,int $id)
    {
      return view('site');
    }
  }
=======
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
>>>>>>> 447a6e4670997e320f58e52373559da774fb203a
