<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetableEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timetable_entries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('batch_id');
            $table->integer('week_day_id');
            $table->integer('class_timing_id');
            $table->integer('subject_id');
            $table->integer('employee_id');
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
		Schema::drop('timetable_entries');
	}

}
