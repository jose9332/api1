<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employee')->unsigned();
            $table->integer('id_skill')->unsigned();
            $table->float('calificacion');
            $table->timestamps();

            $table->foreign('id_employee')
              ->references('id')
              ->on('employee');
            $table->foreign('id_skill')
              ->references('id')
              ->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
