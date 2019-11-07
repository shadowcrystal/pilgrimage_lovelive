<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = DB::table('groups')->first();
        $episode = DB::table('episodes')->first();
        $character = DB::table('characters')->first();

        DB::table('sites')->insert([
          'name' => "沼津駅",
          'image' => "sample.jpg",
          'anime_image' => "sample.jpg",
          'comment' => "JR沼津駅",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
