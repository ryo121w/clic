<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 16);
            $table->string('body');
            $table->string('image_path');
            $table->foreignId('store_format_id')->constrained()->onDelete('cascade');
            $table->foreignId('prefecture_id')->constrained('prefecture')->onDelete('cascade');
            $table->double('stars', 3 , 2)->nullable(true);
            $table->integer('zip');
            $table->string('pref');
            $table->string('city');
            $table->string('town');
            $table->string('building')->nullable(true);
            $table->string('house_number');
            $table->string('station')->nullable(true);
            $table->integer('min')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
