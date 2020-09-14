<?php namespace John\Alquileres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnAlquileresClient extends Migration
{
    public function up()
    {
        Schema::create('john_alquileres_client', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->bigInteger('document');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_alquileres_client');
    }
}
