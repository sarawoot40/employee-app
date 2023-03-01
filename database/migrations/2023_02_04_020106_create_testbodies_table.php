<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestbodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testbodies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('body_test1');
            $table->integer('body_test2');
            $table->integer('body_test3');
            $table->integer('body_test4');
            $table->integer('body_status');
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
        Schema::dropIfExists('testbodies');
    }
}
