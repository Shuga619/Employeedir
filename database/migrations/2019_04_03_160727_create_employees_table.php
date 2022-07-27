<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('designation');
            $table->string('title');
            $table->unsignedInteger('department_id');
            $table->string('employee_id');
            $table->string('image');
            $table->string('vehicle_number')->nullable();
            $table->string('present_address')->nullable();
            $table->timestamps();
            $table->foreign('department_id')->references('id')
                                            ->on('departments')
                                            ->onUpdate('cascade')
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
        Schema::dropIfExists('employees');
    }
}
