<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\StoreFormat;

class StoreFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_formats')->insert([
            'name' => 'SELECT',
            ]);
        DB::table('store_formats')->insert([
            'name' => 'USED',
            ]);
        DB::table('store_formats')->insert([
            'name' => 'EC',
            ]);
    }
}
