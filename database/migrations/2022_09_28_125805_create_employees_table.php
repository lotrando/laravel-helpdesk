<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('personal_number');
            $table->string('title_preffix')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('title_suffix')->nullable();
            $table->string('phone')->nullable();
            $table->string('department_id');
            $table->string('job_id');
            $table->enum('coffee', ['Ano', 'Ne'])->default('Ne');
            $table->enum('catering', ['Ano', 'Ne'])->default('Ne');
            $table->enum('type', ['HPP', 'DPP', 'DPČ'])->default('HPP');
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
        Schema::dropIfExists('employees');
    }
}
