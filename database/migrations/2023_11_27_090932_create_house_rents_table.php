<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_rents', function (Blueprint $table) {
            $table->id();
            $table->string('listing_title')->required();
            $table->string('description')->required();
            $table->string('price')->required();
            $table->string('category')->required();
            $table->string('address')->nullable();
            $table->string('state')->required();
            $table->string('country')->nullable();
            // $table->string('state')->nullable();
            $table->string('property_id')->required();
            $table->string('numberOfRooms')->nullable();
            $table->string('numberOfBath')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('house_rents');
    }
}
