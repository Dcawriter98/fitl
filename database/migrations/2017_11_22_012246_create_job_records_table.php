<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_records', function (Blueprint $table) {
            $table->increments('id');
            $table->text('app_date');
            $table->text('contact');
            $table->string('emp_name');
            $table->text('emp_add');
            $table->string('emp_website');
            $table->text('position');
            $table->text('work_type');
            $table->string('org_contact');
            $table->char('contact_tel', 25);
            $table->char('app_submit', 10);
            $table->text('confirmation_info');
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
        Schema::drop('job_records');
    }
}
