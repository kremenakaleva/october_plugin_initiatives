<?php namespace Pensoft\Initiatives\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftInitiativesData extends Migration
{
    public function up()
    {
        Schema::table('pensoft_initiatives_data', function($table)
        {
            $table->integer('sort_order')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_initiatives_data', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
