<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStanfordPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stanford_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gowns_2018_2019');
            $table->bigInteger('White');
            $table->bigInteger('Yellow');
            $table->bigInteger('Orange');
            $table->bigInteger('Drab');
            $table->bigInteger('Red');
            $table->bigInteger('Gold');
            $table->bigInteger('Copper');
            $table->bigInteger('Dark_Blue');
            $table->bigInteger('Light_Blue');
            $table->bigInteger('Total');
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
        Schema::dropIfExists('stanford_posts');
    }
}
