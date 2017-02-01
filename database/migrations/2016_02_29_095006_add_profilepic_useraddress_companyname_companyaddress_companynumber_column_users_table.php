<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfilepicUseraddressCompanynameCompanyaddressCompanynumberColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('profilepic')->nullable;
            $table->string('useraddress')->nullable;
            $table->string('companyname')->nullable;
            $table->string('companyaddress')->nullable;
            $table->string('companynumber')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
