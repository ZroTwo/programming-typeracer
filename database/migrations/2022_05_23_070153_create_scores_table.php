<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('codeblock_id');
            $table->float('accuracy');
            $table->integer('wpm');
            $table->timestamp('created_at', $precision = 0);
            $table->timestamps();
        });
        Schema::table('scores', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
        });
        Schema::table('scores', function (Blueprint $table) {
            $table->unsignedBigInteger('codeblock_id');

            $table->foreign('codeblock_id')->references('id')->on('codeblock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
