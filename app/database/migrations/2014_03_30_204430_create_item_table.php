<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('items', function($table) {
      $table->increments('id');
      $table->string('description');
      $table->boolean('checked');
      $table->integer('todo_id')->foreign('todo_id')->references('id')->on('todos');
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
    Schema::drop('items');
  }

}
