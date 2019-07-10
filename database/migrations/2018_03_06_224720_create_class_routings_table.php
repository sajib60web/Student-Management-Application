<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassRoutingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('class_routings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('starttime');
            $table->string('endtime');
            $table->integer('daywek');
            $table->integer('departmentId');
            $table->integer('semester');
            $table->integer('teacherId');
            $table->text('subject_name');
            $table->integer('classRoomId');
            $table->integer('techers_phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('class_routings');
    }

}
