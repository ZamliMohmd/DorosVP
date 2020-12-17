<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubspecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subspecialties', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_he');
            $table->bigInteger('mainspecialtie_id')->nullable()->unsigned();
            $table->foreign('mainspecialtie_id')->references('id')->on('mainspecialties')->cascadeOnDelete();
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
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
        Schema::dropIfExists('subspecialties');
    }
}
