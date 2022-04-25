<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravaillerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travailler', function(Blueprint $table)
		{
			$table->string('VIS_MATRICULE', 10)->index('VIS_MATRICULE');
			$table->dateTime('JJMMAA');
			$table->string('REG_CODE', 2)->index('REG_CODE');
			$table->string('TRA_ROLE', 11)->nullable();
			$table->primary(['JJMMAA','VIS_MATRICULE','REG_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('travailler');
	}

}
