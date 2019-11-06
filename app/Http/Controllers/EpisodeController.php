<?php

namespace App\Http\Controllers;

use App\Episodes;
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
