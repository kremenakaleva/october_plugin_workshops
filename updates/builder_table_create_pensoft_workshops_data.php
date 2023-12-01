<?php namespace Pensoft\Workshops\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftWorkshopsData extends Migration
{
    public function up()
    {
        Schema::create('pensoft_workshops_data', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('date');
            $table->text('url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pensoft_workshops_data');
    }
}
