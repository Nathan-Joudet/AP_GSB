<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportVisiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rapport_visite', function(Blueprint $table)
		{
			$table->string('VIS_MATRICULE', 10)->index('VIS_MATRICULE');
			$table->integer('RAP_NUM', true);
			$table->integer('PRA_NUM')->index('PRA_NUM');
			$table->dateTime('RAP_DATE')->nullable();
			$table->string('RAP_BILAN')->nullable();
			$table->string('RAP_MOTIF')->nullable();
			$table->primary(['VIS_MATRICULE','RAP_NUM']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rapport_visite');
	}

}
