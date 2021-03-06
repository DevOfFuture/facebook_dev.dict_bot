<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTutorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('library_id')->unsigned();
            $table->string('tutorial_link')->nullable();
            $table->string('tutorial_article')->nullable();
            $table->timestamps();

            $table->foreign('library_id')->references('id')->on('libraries');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_tutorials');
    }
}
