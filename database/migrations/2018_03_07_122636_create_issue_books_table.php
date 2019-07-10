<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueBooksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('issue_books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name');
            $table->integer('roll_id');
            $table->integer('phone_no');
            $table->integer('departmentId');
            $table->integer('bookId');
            $table->string('tody_date');
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
        Schema::dropIfExists('issue_books');
    }

}
