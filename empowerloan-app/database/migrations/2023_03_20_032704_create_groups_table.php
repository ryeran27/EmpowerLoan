<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('grp_code')->unique();
            $table->string('grp_name')->unique();
            $table->string('meeting_day');
            $table->string('grp_leader');
            $table->string('grp_leader_no');
            $table->string('grp_treasurer');
            $table->string('grp_treasurer_no');
            $table->string('emp_no');
            $table->string('branch_code');
            $table->string('meeting_place');
            $table->string('grp_distance');
            $table->date('joining_date');
            $table->string('status');
            $table->integer('owner');
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
        Schema::dropIfExists('groups');
    }
}
