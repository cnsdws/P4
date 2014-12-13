<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function($table) {

        $table->increments('id');

        $table->integer('transactionid');
        $table->string('type');
        $table->string('symbol');
        $table->integer('shares');
        $table->decimal('price');
        $table->string('owner');    
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
		Schema::drop('transactions');
	}

}
