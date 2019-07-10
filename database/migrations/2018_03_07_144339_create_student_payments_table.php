<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPaymentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('student_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roll_id');
            $table->string('current_date');
            $table->string('name');
            $table->integer('departmentId');
            $table->string('month');
            $table->string('month_rate');
            $table->string('total');
            $table->string('payment');
            $table->text('description');
            $table->string('sub_total');
            $table->string('due');
            $table->integer('mode');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('student_payments');
    }

}
