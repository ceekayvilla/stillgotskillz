<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sts_portfolio_images', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->uuid('participant_id');
            $table->string('path');
            $table->timestamps();
            $table->foreign('participant_id')->references('id')->on('sts_participants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sts_portfolio_images');
    }
}
