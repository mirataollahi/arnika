<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('national_id');
            $table->integer('economic_code');
            $table->string('phone');
            $table->string('manager');
            $table->string('mobile');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->timestamps();


            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_customers');
    }
}
