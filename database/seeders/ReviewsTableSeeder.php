<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use Database\Factories\UserFactory;

class ReviewsTableSeeder extends Seeder
{
   public function run () {
       DB::table('reviews')->insert([
           'title' => 'REVIEW',
           'body' => 'とても良いお店だった！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW1',
           'body' => 'とても良いお店だった！！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW2',
           'body' => 'とても良いお店だった！！！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW3',
           'body' => 'とても良いお店だった！！！！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW4',
           'body' => 'とても良いお店だった！！！！！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW5',
           'body' => 'とても良いお店だった！！！！！！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW6',
           'body' => 'とても良いお店だった！！！！！！！',
           ]);
            DB::table('reviews')->insert([
           'title' => 'REVIEW7',
           'body' => 'とても良いお店だった！！！！！！！！',
           ]);
   }
}
