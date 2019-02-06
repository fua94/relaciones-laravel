<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_selections', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->foreign('student_id')
                  ->references('id')->on('students')
                  ->onDelete('cascade');
            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_selections');
    }
}
