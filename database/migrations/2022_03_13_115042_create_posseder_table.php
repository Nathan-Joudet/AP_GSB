<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossederTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posseder', function(Blueprint $table)
		{
			$table->integer('PRA_NUM')->index('PRA_NUM');
			$table->string('SPE_CODE', 5)->index('SPE_CODE');
			$table->string('POS_DIPLOME', 10)->nullable();
			$table->float('POS_COEFPRESCRIPTION', 10, 0)->nullable();
			$table->primary(['PRA_NUM','SPE_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posseder');
	}

}
