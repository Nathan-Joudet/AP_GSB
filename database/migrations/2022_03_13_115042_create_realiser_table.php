<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealiserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realiser', function(Blueprint $table)
		{
			$table->integer('AC_NUM')->index('AC_NUM');
			$table->string('VIS_MATRICULE', 10)->index('VIS_MATRICULE');
			$table->float('REA_MTTFRAIS', 10, 0)->nullable();
			$table->primary(['AC_NUM','VIS_MATRICULE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('realiser');
	}

}
