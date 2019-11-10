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
        $group = DB::table('groups')->where('name',"Aqours")->first();
        $episode = DB::table('episodes')->first();
        $character = DB::table('characters')->first();

        DB::table('sites')->insert([
          'name' => "十千万",
          'image' => "tochiman.jpg",
          'anime_image' => "tochiman_anime.png",
          'comment' => "エピソード1",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'latlng1' => 35.020440,
          'latlng2' => 138.897571,
        ]);

        DB::table('sites')->insert([
          'name' => "アワシマ16号Aqours丸",
          'image' => "aqours_maru.jpg",
          'anime_image' => "aqours_maru_anime.png",
          'comment' => "エピソード1",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'latlng1' => 35.032693,
          'latlng2' => 138.893280,
        ]);

        DB::table('sites')->insert([
          'name' => "みとしー前バス停",
          'image' => "bus_stop1.jpg",
          'anime_image' => "bus_stop1_anime.png",
          'comment' => "エピソード1",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'latlng1' => 35.019843,
          'latlng2' => 138.896846,
        ]);

        DB::table('sites')->insert([
          'name' => "みとしー前",
          'image' => "chika_walk1.jpg",
          'anime_image' => "chika_walk1_anime.png",
          'comment' => "エピソード1",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'latlng1' => 35.020497,
          'latlng2' => 138.897178,
        ]);

        DB::table('sites')->insert([
          'name' => "千歌と梨子",
          'image' => "chika_riko1.jpg",
          'anime_image' => "chika_riko1_anime.png",
          'comment' => "エピソード1",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'latlng1' => 35.020995,
          'latlng2' => 138.897526,
        ]);

        DB::table('sites')->insert([
          'name' => "浦の星女学院前バス停",
          'image' => "bus_stop2.jpg",
          'anime_image' => "bus_stop2_anime.png",
          'comment' => "エピソード1",
          'group_id' => $group->id,
          'episode_id' => $episode->id,
          'character_id' => $character->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
          'latlng1' => 35.024642,
          'latlng2' => 138.885071,
        ]);
    }
}
