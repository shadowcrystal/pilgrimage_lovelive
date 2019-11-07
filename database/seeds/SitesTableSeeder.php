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
        DB::table('sites')->insert([
          'name' => "沼津駅",
          'image' => "sample.jpg",
          'anime_image' => "sample.jpg",
          'comment' => "JR沼津駅",
          'group_id' => 2,
          'episode_id' => 1,
          'character_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
