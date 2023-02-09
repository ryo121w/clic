<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'Wake',
        ]);
        DB::table('users')->insert([
        'email' => 'ryoutarou9121@gmail.com',
        ]);
        DB::table('users')->insert([
        'password' => 'Ryou9121',
        ]);
    }
}
