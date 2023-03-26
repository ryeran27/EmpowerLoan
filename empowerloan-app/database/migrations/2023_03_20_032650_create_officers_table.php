<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('branch_code');
            $table->string('emp_no')->unique();
            $table->string('name');
            $table->string('email');
            $table->date('joining_date');
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('educational');
            $table->string('contact_person');
            $table->string('contact_no');
            $table->string('status');
            $table->string('owner');
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
        Schema::dropIfExists('officers');
    }
}
