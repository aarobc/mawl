<?php

use Illuminate\Database\Schema\Blueprinteger;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
   public function up()
   {
      Schema::create('users', function($table)
      {
         $table->increments('id');
         $table->string('email')->unique();
         $table->string('name');
         $table->string('username');
         $table->string('password');
         $table->timestamps();
      });

      Schema::create('statuses', function($table)
      {
         $table->increments('id');
         $table->string('name')->unique();
         $table->timestamps();
      });

      Schema::create('locations', function($table)
      {
         $table->increments('id');
         $table->string('name')->unique();
         $table->timestamps();
      });

      Schema::create('notes', function($table)
      {
         $table->increments('id');
         $table->integer('asset_id');
         $table->integer('creator_id');
         $table->string('text');
         $table->timestamps();
      });

      Schema::create('categories', function($table)
      {
         $table->increments('id');
         $table->string('name')->unique();
         $table->string('prefix')->unique();
         $table->timestamps();
      });


      Schema::create('assets', function($table)
      {
         $table->increments('id');
         $table->string('tag')->unique();
         $table->integer('location_id')->unsigned();
         $table->integer('status_id')->unsigned();
         $table->integer('creator_id')->unsigned();
         $table->integer('category_id')->unsigned();
         $table->string('name');
         $table->string('description');
         $table->timestamps();

         $table->foreign('location_id')->references('id')->on('locations');
         $table->foreign('status_id')->references('id')->on('statuses');
         $table->foreign('creator_id')->references('id')->on('users');
         $table->foreign('category_id')->references('id')->on('categories'); 
      }); 
   }

   public function down()
   {
      Schema::drop('users');
      Schema::drop('assets');
      Schema::drop('notes');
      Schema::drop('statuses');
      Schema::drop('locations');
      Schema::drop('categories');
   }
}
