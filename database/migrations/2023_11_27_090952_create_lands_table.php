<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('listing_title')->required();
            $table->string('description')->required();
            $table->string('price')->required();
            $table->string('category')->required();
            $table->string('numbers_available')->nullable();
            $table->string('dimension')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->required();
            $table->string('country')->nullable();
            $table->string('documents')->nullable();
            $table->string('property_id')->required();
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
        Schema::dropIfExists('lands');
    }
}
