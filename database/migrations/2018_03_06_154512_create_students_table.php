<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('departmentId');
            $table->string('fullName');
            $table->integer('roll_id');
            $table->integer('semester');
            $table->string('date');
            $table->integer('phone_number');
            $table->string('emailaddress');
            $table->integer('gender');
            $table->string('guardian_name');
            $table->integer('guardian_phone');
            $table->text('address');
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
}
