<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlltestcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alltestcars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('body_test1');
            $table->integer('body_test2');
            $table->integer('body_test3');
            $table->integer('body_test4');
            $table->integer('theory_test1');
            $table->integer('theory_test2');
            $table->integer('theory_test3');
            $table->integer('act_test1');
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
        Schema::dropIfExists('alltestcars');
    }
}
