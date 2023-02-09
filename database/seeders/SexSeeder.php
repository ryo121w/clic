<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sex')->insert([
            'sex' => 'men',
            ]);

        DB::table('sex')->insert([
            'sex' => 'women',
            ]);

        DB::table('sex')->insert([
            'sex' => 'all',
            ]);
    }
}
