<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {

            $param = [
                'name' => '鉄の剣',
                'price' => 39800,
                'img' => 'img/collections/ring1.jpeg',
                'tag' => 'リング',
                'page_number' => '1',
                'created_at' => '2020/1/1',
                'updated_at' => '2020/1/1'
            ];
            DB::table('items')->insert($param);

            $param = [
                'name' => '金の剣',
                'price' => 49800,
                'img' => 'img/collections/ring1.jpeg',
                'tag' => 'ネックレス',
                'page_number' => '2',
                'created_at' => '2020/1/1',
                'updated_at' => '2020/1/1'
            ];
            DB::table('items')->insert($param);

            $param = [
                'name' => '黒鉄の剣',
                'price' => 39800,
                'img' => 'img/collections/ring1.jpeg',
                'tag' => 'イヤリング',
                'page_number' => '3',
                'created_at' => '2020/1/1',
                'updated_at' => '2020/1/1'
            ];
            DB::table('items')->insert($param);

            $param = [
                'name' => '鉄の盾',
                'price' => 29800,
                'img' => 'img/collections/ring1.jpeg',
                'tag' => 'ネックレス',
                'page_number' => '4',
                'created_at' => '2020/1/1',
                'updated_at' => '2020/1/1'
            ];
            DB::table('items')->insert($param);

            $param = [
                'name' => '金の盾',
                'price' => 9800,
                'img' => 'img/collections/ring1.jpeg',
                'tag' => 'ファランジリング',
                'page_number' => '5',
                'created_at' => '2020/1/1',
                'updated_at' => '2020/1/1'
            ];
            DB::table('items')->insert($param);
        }
    }
}
