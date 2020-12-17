<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_degrees', function (Blueprint $table) {
            $table->id();
           // $table->primary(['teacher_id','degree_id']);
            $table->bigInteger('teacher_id')->nullable()->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
            $table->bigInteger('degree_id')->nullable()->unsigned();
            $table->foreign('degree_id')->references('id')->on('degrees')->cascadeOnDelete();
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->bigInteger('university_id')->nullable()->unsigned();
            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete();
            $table->bigInteger('specialty_id')->nullable()->unsigned();
            $table->foreign('specialty_id')->references('id')->on('subspecialties')->cascadeOnDelete();
            $table->integer('from_year')->nullable();
            $table->integer('to_year')->nullable();

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
        Schema::dropIfExists('teacher_degrees');
    }
}
