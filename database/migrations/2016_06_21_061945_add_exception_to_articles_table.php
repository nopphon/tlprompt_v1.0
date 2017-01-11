<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExceptionToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       # if open comment you can run this commond for add field
       # Schema::table('articles', function (Blueprint $table) {
           #$table->text('excerpt')->nullable();
       # });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        # Schema::table('articles', function (Blueprint $table) {
           # $table->dropColumn('excerpt');
        # });
    }
}
