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
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('extension')->nullable();
            $table->string('flexcube')->nullable();
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
