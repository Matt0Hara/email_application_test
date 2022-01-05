<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmails extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('emails', function (Blueprint $table) {
			$table->id();
			$table->string('to');
			$table->string('from');
			$table->dateTime('date');
			$table->string('subject');
			$table->string('message_id');
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
		Schema::dropIfExists('emails');
	}
}

