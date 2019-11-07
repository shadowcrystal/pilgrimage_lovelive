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
        DB::table('episodes')->insert([
          'name' => "未熟DREAMER",
          'group_id' => 2,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
