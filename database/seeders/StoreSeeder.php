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
        $this->command->info("addressesの作成を開始します...");

        $memberSplFileObject = new \SplFileObject(__DIR__ . '/st_seed.csv');
        $memberSplFileObject->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );

        foreach ($memberSplFileObject as $key => $row) {
            //excelでcsvを保存するとBOM付きになるので削除する
            if ($key === 0) {
                $row[0] = preg_replace('/^\xEF\xBB\xBF/', '', $row[0]);
            }

            DB::table('stores')->insert([
                'name' =>  trim($row[0]),
                'phone' =>  trim($row[1]),
                'body' =>  trim($row[2]),
                'store_format_id' =>  trim($row[3]),
                'image_path' =>  trim($row[4]),
                'prefecture_id' =>  trim($row[5]),
                'zip' =>  trim($row[6]),
                'pref' =>  trim($row[7]),
                'city' =>  trim($row[8]),
                'town' =>  trim($row[9]),
                'building' =>  trim($row[10]),
                'house_number' =>  trim($row[11]),
                'station' =>  trim($row[12]),
                'min' =>  trim($row[13]),

            ]);
        }
        $this->command->info("addressesを作成しました。");


    }
}
