<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUCPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_c_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Gowns');
            $table->bigInteger('gown_2019');
            $table->bigInteger('gown_2017_2018');
            $table->bigInteger('gown_2016');
            $table->bigInteger('gown_2015');
            $table->bigInteger('Light_Blue');
            $table->bigInteger('Seconds');
            $table->bigInteger('Velveteen');
            $table->bigInteger('Velveteen_discolored');
            $table->bigInteger('Rental');
            $table->bigInteger('Rentals_Out');
            $table->bigInteger('Rentals_Left');
            $table->bigInteger('Total')->virtualAS('gown_2019 + gown_2017_2018 + gown_2016 + gown_2015 + Light_Blue + Seconds + Velveteen + Velveteen_discolored + Rental + Rentals_Out + Rentals_Left');
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
        Schema::dropIfExists('u_c_posts');
    }
}
