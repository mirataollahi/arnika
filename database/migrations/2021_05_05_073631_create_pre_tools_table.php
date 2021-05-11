<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tool_id')->unsigned();;
            $table->unsignedBigInteger('pre_system_id')->unsigned();;
            $table->timestamps();


            $table->foreign('tool_id')
                ->references('id')->on('tools')
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
        Schema::dropIfExists('pre_tools');
    }
}
