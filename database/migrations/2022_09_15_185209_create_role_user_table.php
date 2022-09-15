<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();

            // Normal code
            //$table->unsignedBigInteger('role_id');
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            //$table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

            // Short code same function
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // For MySQL dont function on SQLite
        // Schema::table('role_user', function (Blueprint $table) {
        //     $table->dropForeign('role_user_role_id_foreign');
        //     $table->dropForeign('role_user_user_id_foreign');
        // });

        Schema::dropIfExists('role_user');
    }
}
