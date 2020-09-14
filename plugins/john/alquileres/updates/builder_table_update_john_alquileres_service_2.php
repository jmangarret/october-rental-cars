<?php namespace John\Alquileres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJohnAlquileresService2 extends Migration
{
    public function up()
    {
        Schema::table('john_alquileres_service', function($table)
        {
            $table->double('amount', 25, 2);
        });
    }
    
    public function down()
    {
        Schema::table('john_alquileres_service', function($table)
        {
            $table->dropColumn('amount');
        });
    }
}
