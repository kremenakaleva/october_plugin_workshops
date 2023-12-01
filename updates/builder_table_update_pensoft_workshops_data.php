<?php namespace Pensoft\Workshops\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftWorkshopsData extends Migration
{
    public function up()
    {
        Schema::table('pensoft_workshops_data', function($table)
        {
            $table->string('place')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_workshops_data', function($table)
        {
            $table->dropColumn('place');
        });
    }
}
