<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = DB::table('groups')->where('name',"Aqours")->first();

        DB::table('episodes')->insert([
          'name' => "輝きたい!!",
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
