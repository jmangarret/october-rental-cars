<?php namespace John\Alquileres\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJohnAlquileresService extends Migration
{
    public function up()
    {
        Schema::table('john_alquileres_service', function($table)
        {
            $table->string('payment_method', 100);
        });
    }
    
    public function down()
    {
        Schema::table('john_alquileres_service', function($table)
        {
            $table->dropColumn('payment_method');
        });
    }
}
