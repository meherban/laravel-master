<?php

class CreateAuthorsTable {

	public function up()
	{
		Schema::create('authors', function($table) {
			$table->increments('id');
			$table->string('url');
			$table->string('shortened', 5);
		});
	}

	public function down()
	{
		Schema::drop('urls');
	}

}
