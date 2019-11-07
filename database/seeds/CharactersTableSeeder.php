<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = DB::table('groups')->first();

        DB::table('characters')->insert([
          'name' => '松浦果南',
          'image' => 'sample.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);
    }
}
