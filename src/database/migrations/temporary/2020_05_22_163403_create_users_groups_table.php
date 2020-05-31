<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_groups', function (Blueprint $table) {
            // $table->integer('id');
            $table->integer('user_id');
            $table->integer('group_id');
            $table->timestamps();

            $table->primary('user_id', 'group_id');

            // Schema::table('users_groups', function (Blueprint $table) {
            //     $table->bigIncrements('id')->change();
            // });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_groups');
    }
}
