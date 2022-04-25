<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('region', function(Blueprint $table)
		{
			$table->string('REG_CODE', 2)->primary();
			$table->string('SEC_CODE', 1)->index('SEC_CODE');
			$table->string('REG_NOM', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('region');
	}

}
