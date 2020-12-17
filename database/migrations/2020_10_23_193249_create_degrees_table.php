<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_he');
            $table->timestamps();

            // $table->bigInteger('mainspecialtie_id')->nullable()->unsigned();
           // $table->foreign('mainspecialtie_id')->references('id')->on('mainspecialties')->cascadeOnDelete();

          //  $table->bigInteger('subspecialties_id')->nullable()->unsigned();
          //  $table->foreign('subspecialties_id')->references('id')->on('subspecialties')->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degrees');
    }
}
