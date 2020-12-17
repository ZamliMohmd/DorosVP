<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranzillaPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranzilla_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('teacher_id');
            $table->string('amount');
            $table->string('description');
            $table->string('Response')->nullable();
            $table->string('mycvv')->nullable();
            $table->string('contact')->nullable();
            $table->string('myid')->nullable();
            $table->string('email')->nullable();
            $table->string('currency')->nullable();
            $table->string('ccno')->nullable();
            $table->string('supplier')->nullable();
            $table->string('tranmode')->nullable();
            $table->string('expdate')->nullable();
            $table->string('sum')->nullable();
            $table->string('ConfirmationCode')->nullable();
            $table->string('index')->nullable();
            $table->string('Responsesource')->nullable();
            $table->string('Responsecvv')->nullable();
            $table->string('Responseid')->nullable();
            $table->string('Tempref')->nullable();
            $table->string('DBFIsForeign')->nullable();
            $table->string('DBFcard')->nullable();
            $table->string('cardtype')->nullable();
            $table->string('DBFcardtype')->nullable();
            $table->string('cardissuer')->nullable();
            $table->string('DBFsolek')->nullable();
            $table->string('cardaquirer')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('teacher_id')->references('id')->on('teachers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('payment_type')->nullable();
            $table->string('fpay')->nullable();
            $table->string('spay')->nullable();
            $table->string('npay')->nullable();
            $table->string('cred_type')->nullable();
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
        Schema::dropIfExists('tranzilla_payments');
    }
}
