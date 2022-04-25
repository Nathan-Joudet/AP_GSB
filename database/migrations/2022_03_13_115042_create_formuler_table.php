<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formuler', function(Blueprint $table)
		{
			$table->string('MED_DEPOTLEGAL', 10)->index('MED_DEPOTLEGAL');
			$table->string('PRE_CODE', 2)->index('PRE_CODE');
			$table->primary(['MED_DEPOTLEGAL','PRE_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('formuler');
	}

}
