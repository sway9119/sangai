<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'テストタイトル1です',
            'message' => 'テストメッセージですテストメッセージですテストメッセージですテストメッセージですテストメッセージです',
            'img' => '',
            'create_user' => 1,
            'update_user' => 1,
            'created_at' => '2020/1/1',
            'updated_at' => '2020/1/1'
        ];
        DB::table('news')->insert($param);

        $param = [
            'title' => 'テストタイトル2です',
            'message' => 'テストメッセージですテストメッセージですテストメッセージですテストメッセージですテストメッセージです',
            'img' => "",
            'create_user' => 1,
            'update_user' => 2,
            'created_at' => '2020/1/2',
            'updated_at' => '2020/1/2'
        ];
        DB::table('news')->insert($param);

    }
}
