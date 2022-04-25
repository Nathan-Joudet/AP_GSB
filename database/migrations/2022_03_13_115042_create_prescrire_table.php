<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescrireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescrire', function(Blueprint $table)
		{
			$table->string('MED_DEPOTLEGAL', 10)->index('MED_DEPOTLEGAL');
			$table->string('TIN_CODE', 5)->index('TIN_CODE');
			$table->string('DOS_CODE', 10)->index('DOS_CODE');
			$table->string('PRE_POSOLOGIE', 40)->nullable();
			$table->primary(['MED_DEPOTLEGAL','TIN_CODE','DOS_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prescrire');
	}

}
