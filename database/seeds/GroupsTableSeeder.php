<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('groups')->insert([
        'name' => "μ's",
        'logo_image' => "lovelive.jpg",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('groups')->insert([
        'name' => "Aqours",
        'logo_image' => "lovelive_sunshine.jpg",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

    }
}
