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
        $group = DB::table('groups')->where('name',"Aqours")->first();

        DB::table('characters')->insert([
          'name' => '高海千歌',
          'image' => 'chika.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '桜内梨子',
          'image' => 'riko.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '松浦果南',
          'image' => 'kanan.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '黒澤ダイヤ',
          'image' => 'dia.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '渡辺曜',
          'image' => 'you.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '津島善子',
          'image' => 'yoshiko.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '国木田花丸',
          'image' => 'hanamaru.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '小原鞠莉',
          'image' => 'mari.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

        DB::table('characters')->insert([
          'name' => '黒澤ルビィ',
          'image' => 'ruby.jpg',
          'group_id' => $group->id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ]);

    }
}
