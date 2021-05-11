<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('system_id')->unsigned();;
            $table->unsignedBigInteger('pre_system_id')->unsigned();;
            $table->timestamps();



            $table->foreign('system_id')
                ->references('id')->on('systems')
                ->onDelete('cascade');


            $table->foreign('pre_system_id')
                ->references('id')->on('systems')
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
        Schema::dropIfExists('pres');
    }
}
