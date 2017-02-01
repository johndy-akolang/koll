<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO: rename 'guest_id' to 'user_id'
        // TODO: 'condition' must be an FK
        // TODO: 'category' must be an FK
        // TODO: rename 'images' to  'primary_image'
        // TODO: 'province' must be an FK
        // TODO: 'city' must be an FK
        // TODO: what is the purpose of 'mobile' column?
        Schema::create('item', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('guest_id')->unsigned()->default(0); // user_id
            $table->foreign('guest_id') // user_id
                    ->references('id')->on('users')
                    ->onDelete('cascade');
      			$table->string('title');
      			$table->integer('price');
      			$table->string('condition');
      			$table->string('category');
      			$table->text('description');
      			$table->string('images', 400);
      			$table->string('province');
      			$table->string('city');
      			$table->integer('mobile');
            $table->string('slug')->unique();
            $table->boolean('active');
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
        Schema::dropIfExists('item');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
