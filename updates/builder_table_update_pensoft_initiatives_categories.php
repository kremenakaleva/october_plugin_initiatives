<?php namespace Pensoft\Initiatives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftInitiativesCategories extends Migration
{
    public function up()
    {
        Schema::table('pensoft_initiatives_categories', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_initiatives_categories', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
