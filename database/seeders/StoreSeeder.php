<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
        'name' => 'スキキライ',
        'phone' =>'0662133201',
        'body' =>'服の好き嫌いをなくして欲しいとの思いから始まったセレクトショップ「スキキライ」。国内外問わず集めたセレクトブランド＋ブランド物の古着やアメリカ古着を中心にセレクトしており、様々なファッションジャンルを楽しめ、新たな服に挑戦してみたいと考える人にはオススメのお店。夜21時まで営業しており、仕事帰りにも気軽に立ち寄れるのも嬉しいポイントとなっている。',
        'store_format_id' => 1,
        'image_path' => '/img/LUIK.jpeg',
        'prefecture_id' => 1,
        'zip' => 5420086,
        'pref' => '大阪府',
        'city' => '中央区',
        'town' => '西心斎橋',
        'building' => 'アンクルサムビル4F',
        'house_number' => '2-11-14',
        'station' => '難波',
        'min' =>15,
        ]);
    }
}
