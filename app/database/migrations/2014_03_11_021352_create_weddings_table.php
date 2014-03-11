<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWeddingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');
			$table->string('venue');
			$table->string('address1');
			$table->string('address2');
			$table->string('city');
			$table->string('state');
			$table->string('post_action');
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
        Schema::drop('weddings');
    }

}
