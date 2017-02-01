<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('on_post')->unsigned()->default(0); // item_id
            $table->foreign('on_post') // item_id
                    ->references('id')->on('item')
                    ->onDelete('cascade');
            $table->integer('from_user')->unsigned()->default(0); // user_id
            $table->foreign('from_user') // user_id
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->text('body');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('comments');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
