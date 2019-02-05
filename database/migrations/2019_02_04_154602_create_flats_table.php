<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('floor')->nullable();
            $table->decimal('price');
            $table->string('address');
            $table->string('city');
            $table->decimal('total_area')->nullable();
            $table->decimal('rooms_size')->nullable();
            $table->decimal('kitchen_size')->nullable();
            $table->integer('quantity_rooms');
            $table->integer('quantity_bathrooms');
            $table->boolean('furniture');
            $table->boolean('elevator');
            $table->boolean('parking_place');
            $table->integer('quality_area');
            $table->integer('quality_flat');
            $table->integer('light');
            $table->integer('proximity_school');
            $table->integer('proximity_work');
            $table->integer('overall_rating');
            $table->longText('additional')->nullable();
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
        Schema::dropIfExists('flats');
    }
}
