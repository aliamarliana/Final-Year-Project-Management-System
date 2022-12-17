<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->String('category');
            $table->String('title');
            $table->String('start_date');
            $table->String('end_date');
            $table->String('duration'); //in month
            $table->String('progress');
            $table->String('status');
            $table->String('student_name');
            $table->String('supervisor_name');
            $table->String('examiner1_name');
            $table->String('examiner2_name');
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
        Schema::dropIfExists('projects');
    }
};
