<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->longText('page_details')->nullable();
            $table->text('banner_image')->nullable();
            $table->longText('details1')->nullable();
            $table->longText('details2')->nullable();
            $table->longText('details3')->nullable();
            $table->longText('details4')->nullable();
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
