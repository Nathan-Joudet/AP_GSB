<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwitchboardItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('switchboard items', function(Blueprint $table)
		{
			$table->integer('SwitchboardID');
			$table->integer('ItemNumber')->default(0);
			$table->string('ItemText')->nullable();
			$table->integer('Command')->nullable();
			$table->string('Argument')->nullable();
			$table->primary(['SwitchboardID','ItemNumber']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('switchboard items');
	}

}
