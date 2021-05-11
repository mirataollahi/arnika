<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('national_code');
            $table->date('birthday');
            $table->string('phone');
            $table->string('mobile');
            $table->string('business_title');
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
        Schema::dropIfExists('customers');
    }
}
