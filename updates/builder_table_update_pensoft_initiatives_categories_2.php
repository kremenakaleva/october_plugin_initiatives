<?php namespace Pensoft\Initiatives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftInitiativesCategories2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_initiatives_categories', function($table)
        {
            $table->integer('sort_order')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_initiatives_categories', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
