<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
                $table->id();
                $table->string('name_ar');
                $table->string('name_he')->nullable();
               // $table->string('name_en');
                $table->bigInteger('user_id')->unsigned()->nullable();
               // $table->bigInteger('teacher_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
               //  $table->foreign('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();

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
        Schema::dropIfExists('experiences');
    }
}
