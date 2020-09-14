<?php namespace John\Alquileres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnAlquileresService extends Migration
{
    public function up()
    {
        Schema::create('john_alquileres_service', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at')->nullable();
            $table->integer('car_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('client_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_alquileres_service');
    }
}
