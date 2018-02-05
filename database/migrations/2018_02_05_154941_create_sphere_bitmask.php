<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSphereBitmask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('sphere_bitmask_3', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
            $table->enum('type', array('agent', 'lead'));
			$table->integer('status');
			$table->integer('lead_price');
			$table->timestamps();
			$table->integer('fb_1_1');
			$table->integer('fb_1_2');
			$table->integer('fb_1_3');
			$table->integer('fb_2_4');
			$table->integer('fb_2_5');
			$table->integer('fb_2_6');
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
		Schema::drop('sphere_bitmask_3');
    }
}
