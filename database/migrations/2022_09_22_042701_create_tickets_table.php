<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('personal_number');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->string('phone');
            $table->string('department_id')->nullable();
            $table->text('category');
            $table->text('item_number')->nullable();
            $table->text('id_pc')->nullable();
            $table->string('title');
            $table->longText('issue');
            $table->string('priority')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('tickets');
    }
}
