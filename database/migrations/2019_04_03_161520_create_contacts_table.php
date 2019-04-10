<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('mobile');
            $table->string('extension');
            $table->string('flexcube');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('employee_id');
            $table->timestamps();
            $table->foreign('location_id')->references('id')
                                            ->on('locations')
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
            $table->foreign('employee_id')->references('id')
                                            ->on('employees')
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
        Schema::dropIfExists('contacts');
    }
}
