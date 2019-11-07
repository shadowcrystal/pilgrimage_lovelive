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
