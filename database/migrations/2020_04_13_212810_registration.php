<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->char('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration');
    }
}
