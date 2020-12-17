<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_experiences', function (Blueprint $table) {
            $table->id();
          //  $table->primary(['teacher_id','experience_id']);
            $table->tinyInteger('school_student_learning')->nullable();
            $table->tinyInteger('lebsekhiometry')->nullable();
            $table->tinyInteger('lebjrot_preparation')->nullable();
            $table->tinyInteger('exam_preparation')->nullable();
            $table->tinyInteger('university_lecturer')->nullable();
            $table->tinyInteger('teaching_assistant')->nullable();
            $table->tinyInteger('no_exprence')->nullable();
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('user_id')->references('id') ->on('users');
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
        Schema::dropIfExists('teacher_experiences');
    }
}
