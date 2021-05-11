<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepidarRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepidar_requests', function (Blueprint $table) {
            

            $table->id();
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('city')->nullable();
            $table->string('phone_number');
            $table->string('email')->nullable();

            $table->boolean('system1')->nullable();
            $table->boolean('system2')->nullable();
            $table->boolean('system3')->nullable();
            $table->boolean('system4')->nullable();
            $table->boolean('system5')->nullable();
            $table->boolean('system6')->nullable();
            $table->boolean('system7')->nullable();
            $table->boolean('system8')->nullable();
            $table->boolean('system9')->nullable();
            $table->boolean('system10')->nullable();
            $table->boolean('system11')->nullable();
            $table->boolean('system12')->nullable();
            $table->boolean('system13')->nullable();
            $table->boolean('system14')->nullable();
            $table->boolean('system15')->nullable();


            $table->boolean('subsystem1')->nullable();
            $table->boolean('subsystem2')->nullable();
            $table->boolean('subsystem3')->nullable();
            $table->boolean('subsystem4')->nullable();
            $table->boolean('subsystem5')->nullable();
            $table->boolean('subsystem6')->nullable();
            $table->boolean('subsystem7')->nullable();
            $table->boolean('subsystem8')->nullable();
            $table->boolean('subsystem9')->nullable();

            $table->integer('tool1');
            $table->integer('tool2');
            $table->integer('tool3');
            $table->integer('tool4');
            $table->integer('tool5');

            $table->string('condition');






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
        Schema::dropIfExists('sepidar_requests');
    }
}
