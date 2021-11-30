<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sts_participants', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('full_name');
            $table->string('id_number');
            $table->string('email_address');
            $table->string('dob');
            $table->string('phone_number');
            $table->string('city')->nullable();
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
        Schema::dropIfExists('sts_participants');
    }
}
