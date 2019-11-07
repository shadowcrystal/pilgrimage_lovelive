<?php

namespace App\Http\Controllers;

use App\Group;
use App\Site;
use App\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /*
    **
    */
    public function index(int $group_id)
    {
      $group = Group::find($group_id);
      $characters = Character::where('group_id',$group_id)->get();

      view('character/index',[
        'group' => $group,
        'characters' => $characters,
      ]);
    }

    /*
    **
    */
    public function select(int $group_id,int $character_id)
    {
      $group = Group::find($group_id);
      $character = Character::find($character_id);

      view('character/index',[
        'group' => $group,
        'character' => $character,
      ]);
    }

    /*
    **
    */
    public function site(int $group_id,int $character_id)
    {

    }
}
