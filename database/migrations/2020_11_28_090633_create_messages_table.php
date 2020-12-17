<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

          //  $table->string('title')->nullable();
            $table->longText('message')->nullable();
            $table->tinyInteger('is_seen');
            $table->text('msg_file')->nullable();
            $table->longText('token')->nullable();
            $table->bigInteger('user_id')->unsigned();
          //  $table->bigInteger('receiver_id')->unsigned();
          //  $table->bigInteger('teacher_id')->unsigned();
          //  $table->bigInteger('student_id')->unsigned();
          //  $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
          //  $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
           // $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
           // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
