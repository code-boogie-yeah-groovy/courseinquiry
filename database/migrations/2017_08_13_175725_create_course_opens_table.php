<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseOpensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_opens', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('course_id')->references('id')->on('courses')
                  ->onDelete('cascade');
            $table->integer('course_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')
                  ->onDelete('cascade');
            $table->integer('school_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_opens');
    }
}
