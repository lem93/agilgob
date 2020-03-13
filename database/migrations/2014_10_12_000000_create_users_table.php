<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('nick')->primary()->storedAs("CONCAT('_',MD5(CONCAT(email,created_at)))");
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('password');
            $table->string('rol');
            $table->string('email')->unique();
            $table->timestamps();
            // SUBSTRING(SHA1(created_at),0,10)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
