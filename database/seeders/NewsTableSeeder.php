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
            'img' => "",
            'create_user' => 1,
            'update_user' => ""
        ];
        DB::table('news')->insert($param);

        $param = [
            'title' => 'テストタイトル2です',
            'message' => 'テストメッセージですテストメッセージですテストメッセージですテストメッセージですテストメッセージです',
            'img' => "",
            'create_user' => 1,
            'update_user' => ""
        ];
        DB::table('news')->insert($param);

    }
}
