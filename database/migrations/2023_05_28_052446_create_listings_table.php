<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('listing_title')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->string('tags')->nullable();
            $table->string('address')->nullable();
            $table->string('region')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('video-url')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pinterest')->nullable();
            // $table->string('opening-hours');
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
        Schema::dropIfExists('listings');
    }
}
