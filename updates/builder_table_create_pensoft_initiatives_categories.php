<?php namespace Pensoft\Initiatives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftInitiativesCategories extends Migration
{
    public function up()
    {
        Schema::create('pensoft_initiatives_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pensoft_initiatives_categories');
    }
}
