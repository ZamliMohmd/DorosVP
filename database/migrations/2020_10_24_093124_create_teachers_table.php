<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
         //   $table->unsignedBigInteger('degree_id')->nullable();
            $table->string('image')->nullable();
            $table->string('birth_year')->nullable();
            $table->tinyInteger('has_experience')->nullable();
            $table->string('whatsapp')->nullable()->unique();
            $table->boolean('is_accept_online_lessons')->default(0);
            $table->boolean('is_discount_2lessons_price')->default(0);
            $table->string('discount_percentage')->nullable();
            $table->boolean('is_accept_whatsapp_msg')->nullable();
            $table->boolean('is_accept_appear_mobile_no')->nullable();
            $table->boolean('is_accept_msg')->nullable();
            $table->boolean('is_accept_hw_offers')->nullable();
            $table->string('video')->nullable();
            $table->string('address')->nullable();
            $table->longText('cv_text')->nullable();
            $table->text('marketing_text')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('gender_id')->references('id')->on('genders')->cascadeOnDelete();
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnDelete();
         //   $table->foreign('degree_id')->references('id')->on('degrees')->cascadeOnDelete();
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
        Schema::dropIfExists('teachers');
    }
}
