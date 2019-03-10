<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('avatar');
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->mediumText('bio')->nullable();
            $table->string('qualification');
            $table->string('experience');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->json('available_time')->nullable()->change();
            $table->json('course_detail')->nullable()->change();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('teacher_details');
    }
}
