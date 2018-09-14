<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('email');
            $table->string('puesto');
            $table->date('fecha_nacimiento');
            $table->integer('id_address')->unsigned();
            $table->timestamps();

            $table->foreign('id_address')
              ->references('id')
              ->on('address');

            
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
