<?php namespace John\Alquileres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnAlquileresCar extends Migration
{
    public function up()
    {
        Schema::create('john_alquileres_car', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at')->nullable();
            $table->string('placa', 50);
            $table->string('color', 20);
            $table->integer('year');
            $table->string('modelo', 20);
            $table->double('valor_diario', 8, 2);
            $table->boolean('disponible')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_alquileres_car');
    }
}
