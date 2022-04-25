<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstituerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('constituer', function(Blueprint $table)
		{
			$table->string('MED_DEPOTLEGAL', 10)->index('MED_DEPOTLEGAL');
			$table->string('CMP_CODE', 4)->index('CMP_CODE');
			$table->float('CST_QTE', 10, 0)->nullable();
			$table->primary(['MED_DEPOTLEGAL','CMP_CODE']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('constituer');
	}

}
