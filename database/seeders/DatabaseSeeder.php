<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Review;
use App\Models\Prefecture;
use App\Models\Figure;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call
        ([
         UserSeeder::class,
         MstprefectureSeeder::class,
         StoreFormatSeeder::class,
         SexSeeder::class,
         AddressSeeder::class,
        ]);
    }
}